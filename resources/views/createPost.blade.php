@extends('layouts.layout')

@section('title','Criar novo Post')

@section('content')

@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('content')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<form action="{{route('post.store')}}" method="POST" class="w-75 mx-auto">
    @csrf

    <div class="form-group">
        <div><label for="title">Título</label></div>
        <div><input type="text" name="title" id="" class="w-100"></div>
    </div>
    <div class="form-group">
        <div><label for="content">Conteúdo</label></div>
        <div><textarea name="content" id="" cols="100" rows="10" class="w-100"></textarea></div>
    </div>
    <div class="form-group">
        <h6>Categorias</h6>
        @foreach ($categories as $category)
            <input type="checkbox" name="post-categories[]" id="" value="{{$category->id}}">
            <label for="post-categories">{{$category->name}}</label>
        @endforeach
    </div>
    {{-- <div class="form-group">
        <select name="post-user" id="">
            <option value="" disabled selected>Selecionar...</option>
            @foreach ($users as $user)            
                <option value="{{$user->id}}">{{$user->id}} - {{$user->name}}</option>            
             @endforeach
        </select>
    </div> --}}
    <input type="submit" value="Salvar" class="btn btn-primary">
</form>
<div class="mx-auto w-75 mt-2">
    <a href="{{route('post.index')}}" class="btn btn-secondary">Voltar para postagens</a>
</div>
@endsection