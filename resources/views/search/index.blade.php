@extends('layouts.header-and-footer')

@section('title', 'Результаты поиска')

@section('content')


<section class="blog-section spad">
  <div class="container">
    <div class="row mt-100">
      <h2 class="mb-5 text-light col-12">Результаты поиска для: "{{ $query }}"</h2>
      @if($posts->isEmpty())
        <div class="text-light mb-220 col-12 fs30">Посты не найдены</div>
      @else
      <div class="row search__row">
        @foreach($posts as $post)
        <div class="col-6 search__col">
          <div class="blog-post">
            <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}">
            <div class="post-date">{{ $post->created_at->format('F j, Y') }}</div>
            <h4>{{ $post->title }}</h4>
            <div class="post-metas">
              <div class="post-meta">By Admin</div>
              <div class="post-meta">in <a href="#">{{ $post->category->title }}</a></div>
              <div class="post-meta">{{ $post->comments->count() }} комментов</div>
            </div>
            <p>{{ Str::limit($post->content, 150) }}</p>
            <a href="{{ route('page.show', $post->id) }}" class="read-more">Read More</a>
          </div>
        </div>
        @endforeach
      </div>
      @endif
    </div>
  </div>
</section>
@endsection