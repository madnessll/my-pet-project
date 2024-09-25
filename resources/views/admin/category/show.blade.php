@extends('admin.layouts.repeat')
@section('title', 'Категория')
@section('content')

<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 ml-5">
          <div class="mt-5">Нейминг:</div>
          <div class="mt-2 mb-5">{{ $category->title }}</div>
        </div>
        <div class="ml-5 col-1 pb-5">
          <a href="{{ route('admin.category.index') }}" class="btn btn-block btn-dark">Назад</a>
        </div>
      </div>
    </div>
  </section>
</div>


@endsection