@extends('layouts.layout')

@section('title',$post->id.' - '.$post->title)

@section('content')
<p>{{$post->content}}</p>
<a href="{{route('post.edit',$post)}}" class="btn btn-primary">Editar</a>    
@endsection