@extends('layouts.header-and-footer')
@section('title', 'Категории')



@section('content')

<section class="blog-section spad">
  <div class="container">
    <div class="row mt-100 mb-100">
      <h2 class="col-12 text-light mb-5">Все категории</h2>
      @foreach($categories as $category)
      <div class="col-12 mb-3">
        <a href="#" class="green-main category__title">{{ $category->title }}</a>
      </div>
      @endforeach
      <div class="col-12 mt-3">
        {{ $categories->links() }}
      </div>
    </div>
  </div>
</section>




@endsection