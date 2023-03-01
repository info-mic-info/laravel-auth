@extends('layouts.admin')
@section('content')
<div class="container">
    <div class=row>
        <div class="col-12">
            <div class="d-flex justify-content-between">
            <h2>Dettaglio post {{$post->title}}</h2>
            <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Torna all'elenco</a>
            </div>
        </div>
        <div class="col-12">
            <p><strong>Slug:</strong>{{$post->slug}}</p>
            <label class="d-block"><strong>Contenuto:</strong></label>
            <p>{{$post->content}}</p>

        </div>
    </div>
     
</div>
@endsection