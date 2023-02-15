@extends('layouts.main')


@section('konten')
    <main id="main">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-5">
                    <form action="/blog">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Searching..." name="search"
                                value="{{ request('search') }}">
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!-- ======= Hero Slider Section ======= -->
        <section id="hero-slider" class="hero-slider">
            <div class="container-md" data-aos="fade-in">
                <div class="row">
                    <div class="col-12">

                        @if ($posts->count())
                            <div class="swiper sliderFeaturedPosts" style="border-radius: 10px;">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="/posts?category={{ $posts[0]->slug }}"
                                            class="img-bg d-flex align-items-end" style="">
                                            <div class="img-bg-inner" style=" ">
                                                <h2>{{ $posts[0]->title }}</h2>
                                                <span style="color: white;">{{ $posts[0]->exceprt }}</span>
                                                <p><small>Last update 3 mins ago</small></p>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <div class="custom-swiper-button-next">
                                    <span class="bi-chevron-right"></span>
                                </div>
                                <div class="custom-swiper-button-prev">
                                    <span class="bi-chevron-left"></span>
                                </div>

                                <div class="swiper-pagination"></div>
                            </div>

                    </div>
                </div>
            </div>
        </section><!-- End Hero Slider Section -->

        <!-- ======= Search Results ======= -->
        <section id="search-result" class="search-result">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="category-title">Halaman Blog</h3>

                        <div class="row">
                            @foreach ($posts->skip(1) as $post)
                                <div class="col-md-4">
                                    <div class="card mb-5">
                                        <div class="position-absolute  px-3 py-2 text-white"
                                            style="background-color: green"><a
                                                href="/categories/{{ $post->category->slug }}"
                                                style="color: white; font-weight:500;">{{ $post->category->name }}</a>
                                        </div>
                                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                            class="card-img-fluid-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><a
                                                    href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
                                            <p class="card-text">By <a href="/authors/{{ $post->author->username }} "
                                                    style="color: green; font-weight:500;">{{ $post->author->name }} </a>
                                                <small>{{ $posts[0]->created_at->diffForHumans() }}</small>
                                            </p>
                                            <p>{{ $post->exceprt }}</p>
                                            <a href="/posts/{{ $post->slug }}"><button class="btn btn-primary mb-3"
                                                    style="background-color: green; border-color:white"> Read
                                                    More
                                                </button></a>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>


                        {{-- @foreach ($posts as $post)
                            <div class="d-md-flex post-entry-2 small-img">
                                <a href="single-post.html" class="me-4 thumbnail">
                                    <img src="assets/img/post-landscape-6.jpg" alt="" class="img-fluid">
                                </a>
                                <div>
                                    <div class="post-meta"><span class="date">Business</span> <span
                                            class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <h3><a href="/blogs/{{ $posts->id }}">{{ $posts->title }}</a></h3>
                                    <p>{{ $posts->exceprt }}</p>
                                    <div class="d-flex align-items-center author">
                                        <div class="photo">
                                        <a href="/detailBlog">Read More</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach --}}
                    </div>

                    {{-- <div class="col-md-3">
                        <!-- ======= Sidebar ======= -->
                        <div class="aside-block">

                            <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-popular" type="button" role="tab"
                                        aria-controls="pills-popular" aria-selected="true">Popular</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-trending" type="button" role="tab"
                                        aria-controls="pills-trending" aria-selected="false">Trending</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-latest" type="button" role="tab"
                                        aria-controls="pills-latest" aria-selected="false">Latest</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">

                                <!-- Popular -->
                                <div class="tab-pane fade show active" id="pills-popular" role="tabpanel"
                                    aria-labelledby="pills-popular-tab">
                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Sport</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">How to Avoid Distraction and Stay Focused
                                                During Video Calls?</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">17 Pictures of Medium Length Hair in Layers
                                                That Will Inspire Your New Haircut</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Culture</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">9 Half-up/half-down Hairstyles for Long and
                                                Medium Hair</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy: A Working Mom’s
                                                Guide</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Business</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">The Best Homemade Masks for Face (keep the
                                                Pimples Away)</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom
                                                Should Know</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>
                                </div> <!-- End Popular -->

                                <!-- Trending -->
                                <div class="tab-pane fade" id="pills-trending" role="tabpanel"
                                    aria-labelledby="pills-trending-tab">
                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">17 Pictures of Medium Length Hair in Layers
                                                That Will Inspire Your New Haircut</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Culture</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">9 Half-up/half-down Hairstyles for Long and
                                                Medium Hair</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy: A Working Mom’s
                                                Guide</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Sport</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">How to Avoid Distraction and Stay Focused
                                                During Video Calls?</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>
                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Business</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">The Best Homemade Masks for Face (keep the
                                                Pimples Away)</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom
                                                Should Know</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>
                                </div> <!-- End Trending -->

                                <!-- Latest -->
                                <div class="tab-pane fade" id="pills-latest" role="tabpanel"
                                    aria-labelledby="pills-latest-tab">
                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy: A Working Mom’s
                                                Guide</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Business</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">The Best Homemade Masks for Face (keep the
                                                Pimples Away)</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom
                                                Should Know</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Sport</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">How to Avoid Distraction and Stay Focused
                                                During Video Calls?</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Lifestyle</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">17 Pictures of Medium Length Hair in Layers
                                                That Will Inspire Your New Haircut</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                    <div class="post-entry-1 border-bottom">
                                        <div class="post-meta"><span class="date">Culture</span> <span
                                                class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                        <h2 class="mb-2"><a href="#">9 Half-up/half-down Hairstyles for Long and
                                                Medium Hair</a></h2>
                                        <span class="author mb-3 d-block">Jenny Wilson</span>
                                    </div>

                                </div> <!-- End Latest -->

                            </div>
                        </div>

                        <div class="aside-block">
                            <h3 class="aside-title">Video</h3>
                            <div class="video-post">
                                <a href="https://www.youtube.com/watch?v=AiFfDjmd0jU" class="glightbox link-video">
                                    <span class="bi-play-fill"></span>
                                    <img src="assets/img/post-landscape-5.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div><!-- End Video -->

                        <div class="aside-block">
                            <h3 class="aside-title">Categories</h3>
                            <ul class="aside-links list-unstyled">
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Business</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Culture</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Sport</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Food</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Politics</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Celebrity</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Startups</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Travel</a></li>
                            </ul>
                        </div><!-- End Categories -->

                        <div class="aside-block">
                            <h3 class="aside-title">Tags</h3>
                            <ul class="aside-tags list-unstyled">
                                <li><a href="category.html">Business</a></li>
                                <li><a href="category.html">Culture</a></li>
                                <li><a href="category.html">Sport</a></li>
                                <li><a href="category.html">Food</a></li>
                                <li><a href="category.html">Politics</a></li>
                                <li><a href="category.html">Celebrity</a></li>
                                <li><a href="category.html">Startups</a></li>
                                <li><a href="category.html">Travel</a></li>
                            </ul>
                        </div><!-- End Tags -->

                    </div> --}}

                </div>


                <div class="d-flex justify-content-end">
                    {{-- untuk pagination --}}
                     {{ $posts->links() }} 
                </div>


            </div>

        </section> <!-- End Search Result -->



    </main><!-- End #main -->
@else
    <p>not found</p>
    @endif
@endsection
