@extends('layouts.application')

@section('page-title')
<h5 class="breadcrumbs-title">ENDEREÇO DO CLIENTE</h5><br>
@endsection

@section('content')
<p class="caption"><b>Nome:</b> {{ $customer->name }}</p>
<p class="caption"><b>Cep:</b> {{ $address['cep'] }}</p>
<p class="caption"><b>Logradouro:</b> {{ $address['logradouro'] }}</p>
<p class="caption"><b>Número:</b> {{ $customer->number }}</p>
<p class="caption"><b>Bairro:</b> {{ $address['bairro'] }}</p>
<p class="caption"><b>Cidade:</b> {{ $address['localidade'] }}</p>
<p class="caption"><b>Estado:</b> {{ $address['uf'] }}</p>
<a href="{{ route('showCustomers') }}" class="btn waves-effect waves-light blue left">Voltar</a>
@endsection