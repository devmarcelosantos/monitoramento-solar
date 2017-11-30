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
						<th data-field="codCliente">Código do Cliente</th>
						<th data-field="codCliente">Nome</th>
						<th data-field="cpf">CPF</th>
						<th data-field="cnpj">CNPJ</th>
						<th data-field="endereco">Endereço</th>
						<!-- <th data-field="price">Ver contato</th> -->
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
						<td>
							<a href="{{ route('editCustomer', ['id' => $customer->id]) }}" class="btn waves-effect waves-light indigo">Editar</a>

							<a href="" class="btn waves-effect waves-light red">Remover</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
jQuery(function($){
   $("#cep").change(function(){
      var cep_code = $(this).val();
      if( cep_code.length <= 0 ) return;
      $.get("http://apps.widenet.com.br/busca-cep/api/cep.json", { code: cep_code },
         function(result){
            if( result.status!=1 ){
               alert(result.message || "Houve um erro desconhecido");
               return;
            }
            $("input#cep").val( result.code );
            $("input#estado").val( result.state );
            $("input#cidade").val( result.city );
            $("input#bairro").val( result.district );
            $("input#endereco").val( result.address );
            $("input#estado").val( result.state );
         });
   });
});
</script>
@endsection