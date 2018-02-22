@extends('painel.templates.template')

@section('content')

<div class="container">
	<h1 class="title">
		Listagem de Permissoes
	</h1>

	<table class="table table-hover">
	  <tr>
	  	<th>Name</th>
	  	<th>Label</th>
	  	<th width="150px">Ações</th>
	  </tr>
	  
	  @forelse($permissions as $permission)
	  <tr>
	  	<td>{{$permission->name}}</td>
	  	<td>{{$permission->label}}</td>
	  	<td>
	  		<a href="{{url("_painel/permission/$permission->id/roles")}}" class="edit">
	  			<i class="fa fa-unlock"></i>
	  		</a>
	  		<a href="{{url("_painel/permission/$permission->id/edit")}}" class="edit">
	  			<i class="fa fa-pencil-square-o"></i>
	  		</a>
	  		<a href="{{url("_painel/permission/$permission->id/delete")}}" class="delete">
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