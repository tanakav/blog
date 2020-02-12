@extends('layouts.layout')

@section('title', 'Postagens')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td><a href="{{route('post.show',$post->id)}}">{{$post->title}}</a></td>
            </tr>        
        @empty
            <tr>
                <h2>Nada postado!</h2>
            </tr>
        @endforelse
      
    </tbody>
  </table>
@endsection