@extends('layouts.admin');
@section ('content')
<div class="container">
    <div class="row">
        <div class="col-12 my-5">
            <div class="d-flex">
            <h2>Elenco Post</h2>
            </div>
            <div>
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Aggiungi post</a>
            </div>
        </div>
        @if(session('message'))
        <div class="alert alert-success">
            {{ session('message')}}
        </div>
        @endif
        <table class="table table-striped">
            <thead>
                <th>Id</th>
                <th>Titolo</th>
                <th>Slug</th>
                <th>Azioni</th>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->slug}}</td>
                    <td>{{$post->action}}</td>
                  
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

