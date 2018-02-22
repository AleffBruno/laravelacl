@extends('painel.templates.template')

@section('content')

<div class="container">
	<h1 class="title">
		Listagem dos post
	</h1>

	<table class="table table-hover">
	  <tr>
	  	<th>Title</th>
	  	<th>Description</th>
	  	<th width="100px">Ações</th>
	  </tr>
	  
	  @forelse($posts as $post)
	  <tr>
	  	<td>{{$post->title}}</td>
	  	<td>{{$post->description}}</td>
	  	<td>
	  		<a href="{{url('painel/post/$post->id/edit')}}" class="edit">
	  			<i class="fa fa-pencil-square-o"></i>
	  		</a>
	  		<a href="{{url('painel/post/$post->id/delete')}}" class="delete">
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