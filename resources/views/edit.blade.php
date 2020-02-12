@extends('layouts.layout')

@section('title', 'Editar'.' - '.$post->title)

@section('content')
    <form action="{{route('post.update',$post)}}" method="POST" class="w-75 mx-auto">
        @csrf
        @method('PUT')

        <div class="form-group">
            <div><label for="title">Título</label></div>
            <div><input type="text" name="title" id="" value="{{$post->title}}" class="w-100"></div>
        </div>
        <div class="form-group">
            <div><label for="content">Conteúdo</label></div>
            <div><textarea name="content" id="" cols="100" rows="5" class="w-100">{{$post->content}}</textarea></div>
        </div>
        <input type="submit" value="Salvar" class="btn btn-primary">
    </form>
    <form action="{{route('post.destroy',$post)}}" method="post" class="mx-auto w-75 mt-2">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Deletar</button>
    </form>
    
@endsection