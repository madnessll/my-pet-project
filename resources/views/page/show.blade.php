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
              <div class="post-meta">3 Comments</div>
            </div>
            <p>{{ $post->content}}</p>
            <div class="comments">
              <h5>Comments (2)</h5>
              <ul class="comments-list">
                <li>
                  <img src="{{ asset('img/author-thumbs/1.jpg') }}" alt="">
                  <div class="comment-text">
                    <h6>Jane Smith <a href="#" class="reply">Reply</a></h6>
                    <div class="comment-date">April 1,2019</div>
                    <p>Aenean non felis dapibus, placerat libero auctor, ornare ante. Morbi quis ex eleifend, sodales
                      nulla vitae, scelerisque ante. Nunc id vulputate dui. Suspendisse consectetur rutrum metus nec
                      scelerisque. </p>
                  </div>
                </li>
                <li>
                  <img src="{{ asset('img/author-thumbs/2.jpg') }}" alt="">
                  <div class="comment-text">
                    <h6>Michael James <a href="#" class="reply">Reply</a></h6>
                    <div class="comment-date">April 1,2019</div>
                    <p>Non felis dapibus, placerat libero auctor, ornare ante. Morbi quis ex eleifend, sodales nulla
                      vitae, scelerisque ante. Nunc id vulputate dui. Suspendisse consectetur rutrum metus.</p>
                  </div>
                </li>
              </ul>
              <h5>Leave a comment</h5>
              <form class="comment-form">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" placeholder="Your name">
                  </div>
                  <div class="col-md-6">
                    <input type="text" placeholder="Your e-mail">
                  </div>
                  <div class="col-md-12">
                    <textarea placeholder="Your message"></textarea>
                    <button class="site-btn">post Comment</button>
                  </div>
                </div>
              </form>
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
              <a href="#" class="btn btn-dark mt-3">Показать все</a>
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
                    <div class="ln-meta">3 Comments</div>
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
                <img src="{{ asset('img/author-thumbs/1.j') }}pg" alt="">
                <div class="lc-text">
                  <h6>Jane Smith<span> In </span><a href="">The best 2019 Games</a></h6>
                  <div class="lc-date">April 1,2019</div>
                </div>
              </div>
              <div class="lc-item">
                <img src="{{ asset('img/author-thumbs/2.j') }}pg" alt="">
                <div class="lc-text">
                  <h6>Michael James<span> In </span><a href="">The best 2019 Games</a></h6>
                  <div class="lc-date">April 1,2019</div>
                </div>
              </div>
              <div class="lc-item">
                <img src="{{ asset('img/author-thumbs/3.j') }}pg" alt="">
                <div class="lc-text">
                  <h6>Jane Smith<span> In </span><a href="">The best 2019 Games</a></h6>
                  <div class="lc-date">April 1,2019</div>
                </div>
              </div>
              <div class="lc-item">
                <img src="{{ asset('img/author-thumbs/4.j') }}pg" alt="">
                <div class="lc-text">
                  <h6>Michael James<span> In </span><a href="">The best 2019 Games</a></h6>
                  <div class="lc-date">April 1,2019</div>
                </div>
              </div>
              <div class="lc-item">
                <img src="{{ asset('img/author-thumbs/1.j') }}pg" alt="">
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




  @endsection