@extends('layouts.header-and-footer')
@section('title', $post->title )



@section('content')


<!-- Blog section -->
<section class="blog-section spad">
  <div class="container">
    <div class="row mt-100">
      <div class="col-lg-8">
        <div class="blog-post single-post">
          <img src="{{ Storage::url($post->image) }}" alt="">
          <div class="post-date">{{ $post->created_at->format('F j, Y') }}</div>
          <h3>{{ $post->title }}</h3>
          <div class="post-metas">
            <div class="post-meta">By Admin</div>
            <div class="post-meta">in <a href="#">{{ $post->category->title }}</a></div>
            <div class="post-meta">{{ $post->comments->count() }} комментов</div>
          </div>
          <p>{{ $post->content}}</p>
          <div class="comments">
            <h5>Оставлено {{ $comments->total() }} комментов</h5>
            <ul class="comments-list">
              @if ($comments->isNotEmpty())
              @foreach ($comments as $comment)
              <div class="comments__coment">

                <img
                  src="{{ asset('storage/' . (empty($comment->user->avatar) ? 'avatars/default-avatar.jpg' : $comment->user->avatar)) }}"
                  alt="User Avatar" class="rounded-circle" width="40">

                <span class="comments__name">{{ $comment->user->name }}</span>
                <span class="comments__created">{{ $comment->created_at->diffForHumans() }}</span>
                <p class="comments__content">{{ $comment->content }}</p>

                @if (Auth::check() && (Auth::id() === $comment->user_id || Auth::user()->role == 1))
                <form class="comments__delete" action="{{ route('comments.delete', $comment->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-block btn-dark">Удалить</button>
                </form>
                @endif
              </div>
              @endforeach
              @else
              <li class="white">Комментов еще нет брат</li>
              @endif
            </ul>

            <div class="pagination mb-4 justify-content-end">
              {{ $comments->links() }}
            </div>

            @if (Auth::check())
            <h5>Leave a comment</h5>
            <form class="comment-form" action="{{ route('comments.store', $post->id) }}" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-12">
                  <textarea name="content" required placeholder="Your message"></textarea>
                  <button type="submit" class="site-btn">Оставить коммент</button>
                </div>
              </div>
            </form>
            @else
            <p>Для того чтобы оставить комментарий,
              <a class="green-main" href="{{ route('login') }}">войдите</a> или
              <a class="green-main" href="{{ route('register') }}">зарегистрируйтесь</a>.
            </p>
            @endif
          </div>
        </div>
      </div>
      <div class="col-lg-4 sidebar">
        <div class="sb-widget">
          <form class="sb-search">
            <input type="text" placeholder="Search">
          </form>
        </div>
        <div class="sb-widget">
          <h2 class="sb-title">Categories</h2>
          <ul class="sb-cata-list">
            @foreach($categories->take(6) as $category)
            <li>
              <a href="#">{{ $category->title }}<span>{{ $category->posts_count }}</span></a>
            </li>
            @endforeach
          </ul>
          @if($categories->count() > 6)
          <div class="d-flex justify-content-center">
            <a href="{{ route('category.index') }}" class="btn btn-dark mt-3">Показать все</a>
          </div>
          @endif
        </div>
        <div class="sb-widget">
          <h2 class="sb-title">Latest News</h2>
          <div class="latest-news-widget">
            @foreach($latestPosts as $post)
            <div class="ln-item">
              <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}">
              <div class="ln-text">
                <div class="ln-date">{{ $post->created_at->format('F j, Y') }}</div>
                <h6>{{ $post->title }}</h6>
                <div class="ln-metas">
                  <div class="ln-meta">By Admin</div>
                  <div class="ln-meta">in <a href="#">{{ $post->category->title }}</a></div>
                  <div class="ln-meta">{{ $post->comments->count() }} комментов</div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="sb-widget main-comments">
          <h2 class="sb-title main-comments__title">Latest Comments</h2>
          <div class="latest-comments-widget">
            @foreach($latestComments as $comment)
            <div class="lc-item">
              <img
                src="{{ asset('storage/' . (empty($comment->user->avatar) ? 'avatars/default-avatar.jpg': $comment->user->avatar)) }}"
                alt="User Avatar" class="rounded-circle" width="40">
              <div class="lc-text">
                <h6>{{ $comment->user->name }}<span> In </span><a href="#">{{
                    $comment->post->title }}</a></h6>
                <div class="lc-date">{{ $comment->created_at->format('F j, Y') }}</div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Blog section end -->





@endsection