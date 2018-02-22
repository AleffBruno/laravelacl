@extends('painel.templates.template')

@section('content')

<div class="container">
	<h1 class="title">
		Listagem de Funções
	</h1>

	<table class="table table-hover">
	  <tr>
	  	<th>Name</th>
	  	<th>Label</th>
	  	<th width="150px">Ações</th>
	  </tr>
	  
	  @forelse($roles as $role)
	  <tr>
	  	<td>{{$role->name}}</td>
	  	<td>{{$role->label}}</td>
	  	<td>
	  		<a href="{{url("_painel/roles/$role->id/permissions")}}" class="edit">
	  			<i class="fa fa-lock"></i>
	  		</a>
	  		<a href="{{url('_painel/roles/$role->id/edit')}}" class="edit">
	  			<i class="fa fa-pencil-square-o"></i>
	  		</a>
	  		<a href="{{url('_painel/roles/$role->id/delete')}}" class="delete">
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