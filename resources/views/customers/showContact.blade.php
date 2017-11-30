@extends('layouts.application')

@section('page-title')
<h5 class="breadcrumbs-title">CONTATO DO CLIENTE</h5><br>
@endsection

@section('content')
    <p class="caption"><b>Nome:</b> {{ $customer->name }}</p>
@if ($contactCustomer->ddd != null)
    <p class="caption"><b>DDD:</b> {{ $contactCustomer->ddd }}</p>
    <p class="caption"><b>Telefone:</b> {{ $contactCustomer->phone }}</p>
@endif
@if ($contactCustomer->email != null)
    <p class="caption"><b>Email:</b> {{ $contactCustomer->email }}</p>
@endif
<a href="{{ route('showCustomers') }}" class="btn waves-effect waves-light blue left">Voltar</a>
@endsection