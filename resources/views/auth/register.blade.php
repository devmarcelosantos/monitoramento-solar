@extends('layouts.login')

@section('content')
<div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
        <form class="login-form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s12 center">
                    <h4>Registrar Usuário</h4>
                    <p class="center">Seja mais um cliente Solar!</p>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-social-person-outline prefix"></i>
                    <input id="name" type="text" name="name">
                    <label for="name" class="center-align">Nome Completo</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-action-credit-card prefix"></i>
                    <input id="cpf" type="text" placeholder="123.456.789-10" name="cpf" required>
                    <label for="cpf" class="center-align">CPF</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-communication-email prefix"></i>
                    <input id="email" type="email" placeholder="seuemail@dominio.com" name="email" required>
                    <label for="email" class="center-align">Email</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-action-lock-outline prefix"></i>
                    <input id="password" type="password" name="password" required>
                    <label for="password">Senha</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-action-lock-outline prefix"></i>
                    <input id="password-confirm" type="password" name="password_confirmation" required>
                    <label for="password-confirm">Confirmar Senha</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button type="submit" class="btn waves-effect waves-light col s12">REGISTRAR AGORA</button>
                    <!-- <a href="index.html" class="btn waves-effect waves-light col s12">Register Now</a> -->
                </div>
                <div class="input-field col s12">
                    <p class="margin center medium-small sign-up">Já possui conta? <a href="{{ route('login')}}">Acesse</a></p>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection