@extends('painel.templates.template')

@section('content')

<div class="container">
	<h1 class="title">
		Listagem de Usuarios
	</h1>

	<table class="table table-hover">
	  <tr>
	  	<th>Name</th>
	  	<th>E-mail</th>
	  	<th width="100px">Ações</th>
	  </tr>
	  
	  @forelse($users as $user)
	  <tr>
	  	<td>{{$user->name}}</td>
	  	<td>{{$user->email}}</td>
	  	<td>
	  		<a href="{{url('painel/user/$user->id/edit')}}" class="edit">
	  			<i class="fa fa-pencil-square-o"></i>
	  		</a>
	  		<a href="{{url('painel/user/$user->id/delete')}}" class="delete">
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