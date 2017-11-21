@extends('layouts.login')

@section('content')
<div id="login-page" class="row">
	<div class="col s12 z-depth-4 card-panel">
		<form class="login-form" method="POST" action="{{ route('login') }}">
			{{ csrf_field() }}
			<div class="row">
				<div class="input-field col s12 center">
					<img src="images/solar-icon.png" alt="" class="circle responsive-img valign profile-image-login">
					<p class="center login-form-text">BEM VINDO AO SOLAR</p>
				</div>
			</div>
			<div class="row margin">
				<div class="input-field col s12">
					<i class="mdi-social-person-outline prefix"></i>
					<input id="username" type="text" name="email" required>
					<label for="username" class="center-align">Email:</label>
				</div>
			</div>
			<div class="row margin">
				<div class="input-field col s12">
					<i class="mdi-action-lock-outline prefix"></i>
					<input id="password" type="password" name="password" required>
					<label for="password">Senha:</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m12 l12  login-text">
					<input type="checkbox" id="remember-me" name="remember" {{ old('remember') ? 'checked' : '' }}/>
					<label for="remember-me">Lembrar-me</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<button type="submit" class="btn waves-effect waves-light col s12">Entrar</button>
				</div>
				<fb:login-button 
  				scope="public_profile,email"
  				onlogin="checkLoginState();">
			</fb:login-button>
			</div>
			
			<div class="row">
				<div class="input-field col s6 m6 l6">
					<p class="margin medium-small"><a href="{{ route('register') }}">Registrar Agora!</a></p>
				</div>
				<div class="input-field col s6 m6 l6">
					<p class="margin right-align medium-small"><a href="{{ route('password.request') }}">Esqueceu a senha?</a></p>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection