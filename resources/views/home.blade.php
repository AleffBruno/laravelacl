@extends('layouts.app')

@section('content')
<div class="container">
    @forelse($posts as $post)
    	@can('view_post',$post)
		    <strong>{{$post->title}}</strong>
		    <p>{{$post->description}}</p><br>
		    <p> Author : {{$post->getUser->name}} </p>
		    <a href="{{url("/post/$post->id/update")}}">Editar</a><br>
    	@endcan
    @empty
    	nenhum post cadastrado
    @endforelse
</div>
@endsection
