@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
			<h3>Editar Usuário</h3>

			{!! Form::model($usuario, ['route' => ['usuarios.update', $usuario->id], 'class' => 'form', 'method' => 'post']) !!} {!! Form::hidden('_method', 'PATCH') !!}
				<div class="row">
					<div class="form-group col-md-4 input-group-lg">{!! Form::label('name', 'Nome de Usuário') !!} {!! Form::text('name', null, ['class' =>
						'form-control', 'maxlength' => 255, 'autocomplete' => 'off']) !!}
						{!! Form::label('email', 'E-mail') !!} {!! Form::email('email', null, ['class' =>
						'form-control', 'maxlength' => 255, 'autocomplete' => 'off']) !!}
						{!! Form::label('password', 'Senha') !!} {!! Form::password('password',
							['class' => 'form-control']) !!}
					</div>
					<div class="form-group col-md-4 input-group-lg">{!! Form::label('cpf', 'CPF') !!}
						{!! Form::text('cpf', null, ['class' =>
						'form-control', 'maxlength' => 255, 'autocomplete' => 'off']) !!}
						{!! Form::label('data_nascimento', 'Data de Nascimento') !!} {!! Form::date('data_nascimento', null, ['class' =>
						'form-control']) !!} {!! Form::label('password_confirmation', 'Confirmar Senha') !!} {!!
							Form::password('password_confirmation', ['class' => 'form-control']) !!}
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4"></div>
					<div class="form-group col-md-4">{!! Form::submit('Salvar Alteração', ['class' => 'btn btn-success btn-lg', 'style' => 'margin-left: 38px']) !!}</div>
				</div>
			{!! Form::close() !!}

		</div>
	</div>
</div>
@endsection
