@extends('layouts.layout')

@section('title',$post->id ." - ". $post->title)

@section('content')
<h4 class="text-center">by {{$user->name}} on {{date('d/M/Y',strtotime($post->created_at))}}</h4>
<p>{{$post->content}}</p>

@auth
    @if(auth()->id()==$user->id)
    <form action="{{route('post.edit',$post)}}" method="GET">
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
    @endif
@endauth

@endsection