<?php

namespace Solar\Http\Controllers;

use Solar\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Canducci\ZipCode\Facades\ZipCode;

class CustomerController extends Controller
{
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->middleware('auth');
        $this->customer = $customer;
    }

    public function index()
    {
        $customers = Customer::all();
        return view('customers.index')->with('customers', $customers);
    }

    public function findCep($customerId)
    {
        $customer = $this->customer->find($customerId);
        $zipCode = ZipCode::find($customer->cep);

        return view('customers.showAddress')->with(['customer' => $customer, 'address' => $zipCode->getArray()]);
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
		$validator = Validator::make($inputs, [
		    'name'       => 'required|max:100',
            'cpf'        => 'max:11',
            'cnpj'       => 'max:14',
            'cep'        => 'required|max:8',
            'complement' => 'max:50',
            'number'     => 'required'
		]);

        if ($validator->fails()) {
            return redirect(route('createCustomer'))->withErrors($validator->errors());
        }

        $this->customer->create($inputs);
        return redirect('/customers')->with('success', 'Cliente adicionado com sucesso.');
    }

    public function edit($customerId)
    {
        $customer = $this->customer->findOrFail($customerId);
        return view('customers.edit', ['customer' => $customer]);
    }

    public function update(Request $request, $customerId)
    {
        $inputs = $request->all();

		$customer = $this->customer->findOrFail($customerId);
        $customer->fill($inputs)->save();

        return redirect('/customers')->with('success', 'Cliente alterado com sucesso.');
    }

}