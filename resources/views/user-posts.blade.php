@extends('layouts.layout')

@section('title','Postagens de '.$user->name)

@section('content')
    <div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Created at</th>
                <th scope="col">Last update</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td><a href="{{route('post.show',$post->id)}}">{{$post->title}}</a></td>
                        <td>{{$post->created_at}}</td>
                        <td>{{$post->updated_at}}</td>
                        <td>
                            <form action="{{route('post.edit',$post->id)}}" method="GET">
                                <button type="submit" class="btn btn-primary">Editar</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('post.destroy',$post->id)}}" method="post" class="mx-auto w-75 mt-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </td>
                        </form>
                    </tr>        
                @empty
                    <tr>
                        <h2>Nada postado!</h2>
                    </tr>
                @endforelse
              
            </tbody>
          </table>

    </div>
@endsection