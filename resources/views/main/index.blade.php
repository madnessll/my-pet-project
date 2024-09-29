@extends('layouts.header-and-footer')
@section('title', 'Салют' )
@section('content')

<!-- Blog section -->
<section class="blog-section spad">
  <div class="container">
    <div class="row mt-100">
      <div class="col-lg-8 blog-posts">
        <div class="blog-post featured-post">
          <img src="{{ Storage::url($randomPost->image) }} " alt="">
          <div class="post-date">{{ $randomPost->created_at->format('F j, Y') }}</div>
          <h3>{{ $randomPost->title }}</h3>
          <div class="post-metas">
            <div class="post-meta">By Admin</div>
            <div class="post-meta">in <a href="#">{{ $randomPost->category->title }}</a></div>
            <div class="post-meta">{{ $randomPost->comments->count() }} комментов</div>
          </div>
          <p>{{ Str::limit($randomPost->content, 250) }}</p>
          <a href="{{ route('page.show', $randomPost->id) }}" class="site-btn">Read More</a>
        </div>
        <div class="row">
          @foreach($randomPosts as $post)
          <div class="col-md-6">
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
        <div class="sb-widget">
          <h2 class="sb-title">Latest Comments</h2>
          <div class="latest-comments-widget">
            <div class="lc-item">
              <img src="{{'img/author-thumbs/1.jpg'}}" alt="">
              <div class="lc-text">
                <h6>Jane Smith<span> In </span><a href="">The best 2019 Games</a></h6>
                <div class="lc-date">April 1,2019</div>
              </div>
            </div>
            <div class="lc-item">
              <img src="{{'img/author-thumbs/2.jpg'}}" alt="">
              <div class="lc-text">
                <h6>Michael James<span> In </span><a href="">The best 2019 Games</a></h6>
                <div class="lc-date">April 1,2019</div>
              </div>
            </div>
            <div class="lc-item">
              <img src="{{'img/author-thumbs/3.jpg'}}" alt="">
              <div class="lc-text">
                <h6>Jane Smith<span> In </span><a href="">The best 2019 Games</a></h6>
                <div class="lc-date">April 1,2019</div>
              </div>
            </div>
            <div class="lc-item">
              <img src="{{'img/author-thumbs/4.jpg'}}" alt="">
              <div class="lc-text">
                <h6>Michael James<span> In </span><a href="">The best 2019 Games</a></h6>
                <div class="lc-date">April 1,2019</div>
              </div>
            </div>
            <div class="lc-item">
              <img src="{{'img/author-thumbs/1.jpg'}}" alt="">
              <div class="lc-text">
                <h6>Jane Smith<span> In </span><a href="">The best 2019 Games</a></h6>
                <div class="lc-date">April 1,2019</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Blog section end -->

<!-- Blog list section -->
<section class="blog-list-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="small-blog-list">
          <div class="sb-item">
            <img src="{{'img/blog-thumbs/6.jpg'}}" alt="">
            <div class="sb-text">
              <div class="sb-date">April 1,2019</div>
              <h6>10 Amazing new games</h6>
              <div class="sb-metas">
                <div class="sb-meta">By Admin</div>
                <div class="sb-meta">in <a href="#">Games</a></div>
                <div class="sb-meta">3 Comments</div>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
            </div>
          </div>
          <div class="sb-item">
            <img src="{{'img/blog-thumbs/7.jpg'}}" alt="">
            <div class="sb-text">
              <div class="sb-date">April 1,2019</div>
              <h6>10 Amazing new games</h6>
              <div class="sb-metas">
                <div class="sb-meta">By Admin</div>
                <div class="sb-meta">in <a href="#">Games</a></div>
                <div class="sb-meta">3 Comments</div>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
            </div>
          </div>
          <div class="sb-item">
            <img src="{{'img/blog-thumbs/8.jpg'}}" alt="">
            <div class="sb-text">
              <div class="sb-date">April 1,2019</div>
              <h6>10 Amazing new games</h6>
              <div class="sb-metas">
                <div class="sb-meta">By Admin</div>
                <div class="sb-meta">in <a href="#">Games</a></div>
                <div class="sb-meta">3 Comments</div>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
            </div>
          </div>
          <div class="sb-item">
            <img src="{{'img/blog-thumbs/9.jpg'}}" alt="">
            <div class="sb-text">
              <div class="sb-date">April 1,2019</div>
              <h6>10 Amazing new games</h6>
              <div class="sb-metas">
                <div class="sb-meta">By Admin</div>
                <div class="sb-meta">in <a href="#">Games</a></div>
                <div class="sb-meta">3 Comments</div>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo. </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="sb-widget">
          <h2 class="sb-title">Top 5 this week</h2>
          <div class="latest-news-widget top-five">
            <div class="ln-item">
              <div class="ln-index">01</div>
              <img src="{{'img/blog-thumbs/1.jpg'}}" alt="">
              <div class="ln-text">
                <div class="ln-date">April 1, 2019</div>
                <h6>10 Amazing new games</h6>
                <div class="ln-metas">
                  <div class="ln-meta">By Admin</div>
                  <div class="ln-meta">in <a href="#">Games</a></div>
                  <div class="ln-meta">3 Comments</div>
                </div>
              </div>
            </div>
            <div class="ln-item">
              <div class="ln-index">02</div>
              <img src="{{'img/blog-thumbs/2.jpg'}}" alt="">
              <div class="ln-text">
                <div class="ln-date">April 1, 2019</div>
                <h6>10 Amazing new games</h6>
                <div class="ln-metas">
                  <div class="ln-meta">By Admin</div>
                  <div class="ln-meta">in <a href="#">Games</a></div>
                  <div class="ln-meta">3 Comments</div>
                </div>
              </div>
            </div>
            <div class="ln-item">
              <div class="ln-index">03</div>
              <img src="{{'img/blog-thumbs/3.jpg'}}" alt="">
              <div class="ln-text">
                <div class="ln-date">April 1, 2019</div>
                <h6>10 Amazing new games</h6>
                <div class="ln-metas">
                  <div class="ln-meta">By Admin</div>
                  <div class="ln-meta">in <a href="#">Games</a></div>
                  <div class="ln-meta">3 Comments</div>
                </div>
              </div>
            </div>
            <div class="ln-item">
              <div class="ln-index">04</div>
              <img src="{{'img/blog-thumbs/4.jpg'}}" alt="">
              <div class="ln-text">
                <div class="ln-date">April 1, 2019</div>
                <h6>10 Amazing new games</h6>
                <div class="ln-metas">
                  <div class="ln-meta">By Admin</div>
                  <div class="ln-meta">in <a href="#">Games</a></div>
                  <div class="ln-meta">3 Comments</div>
                </div>
              </div>
            </div>
            <div class="ln-item">
              <div class="ln-index">05</div>
              <img src="{{'img/blog-thumbs/5.jpg'}}" alt="">
              <div class="ln-text">
                <div class="ln-date">April 1, 2019</div>
                <h6>10 Amazing new games</h6>
                <div class="ln-metas">
                  <div class="ln-meta">By Admin</div>
                  <div class="ln-meta">in <a href="#">Games</a></div>
                  <div class="ln-meta">3 Comments</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Blog list section end -->



@endsection