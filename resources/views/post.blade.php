@extends('layouts.layout')

@section('title',$post->id.' - '.$post->title)

@section('content')
<h5 class="text-center">by {{$user->name}}, at {{$post->created_at}}</h5>
<p>{{$post->content}}</p>
<a href="{{route('post.edit',$post)}}" class="btn btn-primary">Editar</a>    
@endsection