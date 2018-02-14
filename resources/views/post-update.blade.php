@extends('layouts.app')

@section('content')
<div class="container">
   	<strong>{{$post->title}}</strong>
   	<p>{{$post->description}}</p><br>
    <p> Author : {{$post->getUser->name}} </p>
</div>
@endsection
