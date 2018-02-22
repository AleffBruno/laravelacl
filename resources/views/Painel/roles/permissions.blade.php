@extends('painel.templates.template')

@section('content')

<div class="container">
	<h1 class="title">
		Permissoes de {{$role->name}}
	</h1>

	<table class="table table-hover">
	  <tr>
	  	<th>Name</th>
	  	<th>Label</th>
	  	<th width="100px">Ações</th>
	  </tr>
	  
	  @forelse($permissions as $permission)
	  <tr>
	  	<td>{{$permission->name}}</td>
	  	<td>{{$permission->label}}</td>
	  	<td>
	  		<a href="{{url('_painel/permission/$permission->id/delete')}}" class="delete">
	  			<i class="fa fa-trash"></i>
	  		</a>
	  	</td>
	  </tr>
	  @empty
	  	<tr>
	  		<td>
	  			Nenhum resultado
	  		</td>
	  	</tr>
	  @endforelse
	</table>

</div>

@endsection