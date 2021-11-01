@extends('admin.layouts.app')

@section('title')

Atualizar o post
    
@endsection

@section('content')

<h1 class="text-center text-3xl uppercase font-black my-4">Editar o post <strong>{{ $post->title }}</strong></h1>

<div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 mx-auto">
    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
    @method('put')
    @include('admin.posts._partials.form')
    </form>
</div>
    
@endsection