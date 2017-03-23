@extends('layout')

@section('content')
	<div class="col-xs-12 col-sm-8">
		<h2>
			Nuevo producto
			<a href="{{ route('products.index') }}" class="btn btn-default pull-right">		Regresar
			</a>
		</h2>
		<hr>
		{!! Form::open(['route' => 'products.store']) !!}
			<div class="form-group">
				{!! Form::label('name', 'Nombre del producto') !!}
				{!! Form::text('name', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('short', 'Descripción breve del producto') !!}
				{!! Form::text('short', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('body', 'Descripción completa del producto') !!}
				{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
			</div>
		{!! Form::close() !!}
	</div>
	<div class="col-xs-12 col-sm-4">
		@include('products.partials.aside')
	</div>
@endsection