@extends('layouts.application')

@section('page-title')
<h5 class="breadcrumbs-title">ENDEREÇO DO CLIENTE</h5><br>
@endsection

@section('content')
<p class="caption">
    Nome: {{ $customer->name }}<br>
    Cep: {{ $address['cep'] }}<br>
    Logradouro: {{ $address['logradouro'] }}
    Número: {{ $customer->number }}<br>
    Bairro: {{ $address['bairro'] }}<br>
    Cidade: {{ $address['localidade'] }}<br>
    Estado: {{ $address['uf'] }}<br>
</p>
@endsection