@extends('layouts.application')

@section('page-title')
<h5 class="breadcrumbs-title">Adicionar Novo Cliente</h5>
@endsection

@section('content')
<div class="col s12 m12 l6">
    <div class="card-panel">
        <h4 class="header2">Insira os dados para inserir um novo cliente:</h4>
        <div class="row">
            <form class="col s12" method="POST" action="{{ route('storeCustomer') }}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="POST">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input id="customerName" name="name" type="text" class="validate" maxlength="100">
                        <label for="customerName">Nome completo</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <i class="mdi-action-label prefix"></i>
                        <input id="customerCpf" name="cpf" type="text" class="validate" maxlength="11">
                        <label for="customerCpf">CPF</label>
                    </div>
                    <div class="input-field col s8">
                        <i class="mdi-action-label prefix"></i>
                        <input id="customerCnpj" name="cnpj" type="text" class="validate" maxlength="14">
                        <label for="cnpj">CNPJ</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s2">
                        <i class="mdi-communication-dialpad prefix"></i>
                        <input id="customerDDDPhone" name="ddd" type="number" class="validate">
                        <label for="ddd">DDD</label>
                    </div>
                    <div class="input-field col s10">
                        <i class="mdi-communication-phone prefix"></i>
                        <input id="customerPhone" name="phone" type="text" class="validate" maxlength="9">
                        <label for="phone">Telefone/Celular</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="mdi-action-label prefix"></i>
                        <input id="customerEmail" name="email" type="text" class="validate" maxlength="100">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s9">
                        <i class="mdi-communication-location-on prefix"></i>
                        <input id="customerCep" name="cep" type="text" class="validate" maxlength="8">
                        <label for="customerCep">CEP</label>
                    </div>
                    <div class="input-field col s3">
                        <i class="mdi-editor-mode-edit prefix"></i>
                        <input id="customerNumber" name="number" type="text" class="validate" maxlength="8">
                        <label for="customerNumber">Número</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="mdi-editor-insert-comment prefix"></i>
                        <input id="customerComplement" name="complement" type="text" class="validate" maxlength="50">
                        <label for="customerComplement">Complemento</label>
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="input-field col s12">
                            <a href="{{ route('showCustomers') }}" class="btn waves-effect waves-light blue right">Cancelar</a>
                            <button class="btn waves-effect waves-light blue left" type="submit">Cadastrar
                                <i class="mdi-content-send right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection