<?php

namespace Solar\Http\Controllers;

use Solar\Contact;
use Solar\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Canducci\ZipCode\Facades\ZipCode;

class CustomerController extends Controller
{
    protected $customer;
    protected $contact;

    public function __construct(Customer $customer, Contact $contact)
    {
        $this->middleware('auth');
        $this->customer = $customer;
        $this->contact = $contact;
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

    public function showContact($customerId)
    {
        $customer = Customer::find($customerId);
        $contactCustomer = Contact::where('customer_id', $customerId)->get();

        return view('customers.showContact')->with(['customer' => $customer, 'contactCustomer' => $contactCustomer[0]]);
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $inputs = $request->all();
		$validator = Validator::make($inputs, [
		    'name'          => 'required|max:100',
            'cpf'           => 'max:11',
            'cnpj'          => 'max:14',
            'ddd'           => 'required',
            'phone'         => 'required|max:9',
            'email'         => 'required|max:100',
            'cep'           => 'required|max:8',
            'complement'    => 'max:50',
            'number'        => 'required'
		]);

        if ($validator->fails()) {
            return redirect(route('createCustomer'))->withErrors($validator->errors());
        }

        $customerFields = [
            'name'          => $inputs['name'],
            'cpf'           => $inputs['cpf'],
            'cnpj'          => $inputs['cnpj'],
            'cep'           => $inputs['cep'],
            'complement'    => $inputs['complement'],
            'number'        => $inputs['number']
        ];

        $customerCreated = $this->customer->create($customerFields);

        $contactFields = [
            'customer_id'   => $customerCreated->id,
            'ddd'           => $inputs['ddd'],
            'phone'         => $inputs['phone'],
            'email'         => $inputs['email'],
        ];

        $contactCreated = $this->contact->create($contactFields);
        $contactCreated->save();
        return redirect()->route('showCustomers')->with('success', 'Cliente adicionado com sucesso.');
    }

    public function edit($customerId)
    {
        $customer = $this->customer->findOrFail($customerId);
        $contactCustomer = Contact::where('customer_id', $customer->id)->get();

        return view('customers.edit', ['customer' => $customer, 'contactCustomer' => $contactCustomer[0]]);
    }

    public function update(Request $request, $customerId)
    {
        $inputs = $request->all();

        $customerFields = [
            'name'          => $inputs['name'],
            'cpf'           => $inputs['cpf'],
            'cnpj'          => $inputs['cnpj'],
            'cep'           => $inputs['cep'],
            'complement'    => $inputs['complement'],
            'number'        => $inputs['number']
        ];

		$customer = $this->customer->findOrFail($customerId);
        $customer->fill($customerFields)->save();

        $contactFields = [
            'customer_id'   => $customerId,
            'ddd'           => $inputs['ddd'],
            'phone'         => $inputs['phone'],
            'email'         => $inputs['email'],
        ];

        $contactCustomer = Contact::where('customer_id', $customerId)->get();
        $contactCustomer[0]->fill($contactFields)->save();

        return redirect()->route('showCustomers')->with('success', 'Cliente alterado com sucesso.');
    }

    public function delete($customerId)
    {
        $contacts = Contact::where('customer_id', $customerId);
        $contacts->delete();
        $this->customer->destroy($customerId);

        return redirect()->route('showCustomers')->with('success', 'A postagem foi excluída com sucesso.');
    }
}