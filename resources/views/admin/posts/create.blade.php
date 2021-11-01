@extends('admin.layouts.app')

@section('title')

Criar novo post
    
@endsection

@section('content')

<h1>Criar um novo post!</h1>

<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
@include('admin.posts._partials.form')
</form>
    
@endsection