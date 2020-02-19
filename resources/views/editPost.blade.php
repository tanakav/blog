@extends('layouts.layout')

@section('title', 'Editar '.$post->id.' - '.$post->title)

@section('content')

@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('content')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

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
        <div class="form-group">
            <h6>Categorias</h6>
            @foreach ($all_categories as $cat)
                @if ($post_categories->contains($cat))
                    <input type="checkbox" name="new_categories[]" id="" value="{{$cat->id}}" checked>
                @else
                    <input type="checkbox" name="new_categories[]" id="" value="{{$cat->id}}">
                @endif
                <label for="new_categories[]">{{$cat->name}}</label>
            @endforeach
            
            
        </div>
        <input type="submit" value="Salvar" class="btn btn-primary">
    </form>
    <form action="{{route('post.destroy',$post)}}" method="post" class="mx-auto w-75 mt-2">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Deletar</button>
    </form>
    
@endsection