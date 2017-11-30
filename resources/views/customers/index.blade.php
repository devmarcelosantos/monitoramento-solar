@extends('layouts.application')

@section('page-title')
<h5 class="breadcrumbs-title">LISTA DE CLIENTES</h5><br>
@endsection

@section('content')
<div id="striped-table">
	<div class="row">
		<div class="col s12 m12 l12">
			<table class="striped">
				<thead>
					<tr>
						<th data-field="codCliente">Cod. Cliente</th>
						<th data-field="codCliente">Nome</th>
						<th data-field="cpf">CPF</th>
						<th data-field="cnpj">CNPJ</th>
						<th data-field="endereco">Endereço</th>
						<th data-field="contact">Ver contato</th>
						<th data-field="endereco">Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($customers as $customer)
					<tr>
						<td>{{ $customer->id }}</td>
						<td>{{ $customer->name }}</td>
						<td>{{ $customer->cpf }}</td>
						<td>{{ $customer->cnpj }}</td>
						<td><a href="{{ route('addressCustomer', ['id' => $customer->id]) }}">Ver endereço</a></td>
						<td><a href="{{ route('contactCustomer', ['id' => $customer->id]) }}">Ver contato</a></td>
						<td>
							<a href="{{ route('editCustomer', ['id' => $customer->id]) }}" class="btn waves-effect waves-light indigo">Editar</a>
							<form method="POST" action="{{ route('deleteCustomer', ['id' => $customer->id]) }}">
								<input type="hidden" name="_method" value="DELETE">
								{{ csrf_field() }}
								<button type="submit" class="btn waves-effect waves-light red">Remover</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection