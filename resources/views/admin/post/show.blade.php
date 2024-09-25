@extends('admin.layouts.repeat')
@section('title', 'Post')
@section('content')

<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 ml-5">
          <div class="mt-5">Название:</div>
          <div class="mt-2">{{ $post->title }}</div>
        </div>
        <div class="col-12 ml-5">
          <div class="mt-5">Описание:</div>
          <div class="mt-2 col-4 pl-0">{{ $post->content }}</div>
        </div>
        <div class="col-12 ml-5">
          <div class="mt-5">Картинка:</div>
          <img style=" height: 400px;" src="{{ url('storage/' . $post->image) }}"
            class="mt-2 col-auto pb-5 pl-0"></img>
        </div>
        <div class="col-12 ml-5 mb-4">
          <div>Категория:</div>
          <div >{{ $post->category ? $post->category->title : 'Без категории' }}</div>
        </div>
        <div class="ml-5 col-1 pb-5">
          <a href="{{ route('admin.post.index') }}" class="btn btn-block btn-dark">Назад</a>
        </div>
      </div>
    </div>
  </section>
</div>


@endsection