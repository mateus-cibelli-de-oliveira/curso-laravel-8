@extends('admin.layouts.app')

@section('title')

Atualizar o post
    
@endsection

@section('content')

<h1>Atualizar o post <strong>{{ $post->title }}</strong></h1>

<form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
@method('put')
@include('admin.posts._partials.form')
</form>
    
@endsection