@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
			<h3>Consulta de Telefones</h3>
			<p>
				<a href="telefones/create" class="btn btn-primary" role="button" aria-pressed="true">Novo Telefone</a>
			</p>

			<table id="tabela" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Usuário</th>
						<th>Tipo</th>
						<th>DDD</th>
						<th>Telefone</th>
						<th colspan="1">Edição</th>
						<th colspan="1">Exclusão</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($telefones as $telefone)
					<tr>
						<td>{{ $telefone->nome_usuario }}</td>
						<td>{{ $telefone->tipo }}</td>
						<td>{{ $telefone->ddd }}</td>
						<td>{{ $telefone->telefone }}</td>
						<td><a href="{{ action('TelefonesController@edit', $telefone->id) }}" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar">Editar</a></td>
						<td><a href="{{ url('telefone', $telefone->id) }}" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Excluir">Excluir</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>

    	</div>
    </div>
</div>
@endsection
