@extends('layout')

@section('content')
	<div class="col-xs-12 col-sm-8">
		<h2>Lista de productos</h2>
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Nombre del producto</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $product)
				<tr>
					<td>{{ $product->id }}</td>
					<td>
						<strong>{{ $product->name }}</strong>
						{{ $product->short }}
					</td>
					<td width="20px">Ver</td>
					<td width="20px">
						<a href="#" class="btn btn-link">
							Editar
						</a>
					</td>
					<td width="20px">
						{!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
							<button class="btn btn-link">
								Borrar
							</button>							
						{!! Form::close() !!}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $products->render() !!}
	</div>
	<div class="col-xs-12 col-sm-4">
		<p class="alert alert-info">
			is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
		</p>
	</div>
@endsection