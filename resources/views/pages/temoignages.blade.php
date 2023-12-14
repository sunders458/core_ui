@extends('layouts.main')
@section('contenu')
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.jpg">
    <div class="container">
    <div class="breadcumb-content">
        <h1 class="breadcumb-title">Témoignages</h1>
    </div>
    </div>
</div>
<section class="vs-blog-wrapper space-top space-extra-bottom">
    <div class="container">
    <div class="row gx-60">
        <div class="col-lg-8">
            <div class="vs-blog blog-single">
                <div class="blog-img"><a href="blog-details.html"><img src="{{asset('assets/img/blog/blog-big-5.jpg')}}" alt="BLog Img"></a></div>
                <div class="blog-content">
                <h2 class="blog-title"><a href="blog-details.html">Backward compatible information like</a></h2>
                <div class="author-meta">
                    <div class="author-avater"><img src="{{asset('assets/img/avater/blog-author.jpg')}}" alt="author"></div>
                    <div class="meta-content">
                        <h5 class="author-name"><a href="#">David Smith</a></h5>
                        <div class="blog-meta"><a href="#"><i class="fal fa-eye"></i> 233 Views</a> <a href="#"><i class="fal fa-comments"></i> 3 Comments</a> <a href="#"><i class="fal fa-calendar-alt"></i> 25 April, 2022</a></div>
                    </div>
                </div>
                <p class="blog-text">In today’s world, building a business also means you’ll need a strong website and social media presence. These can help you learn your customers better.</p>
                <a href="{{route('temoignages.show')}}" class="vs-btn">En savoir plus</a>
                </div>
            </div>
            <div class="vs-pagination mb-30">
                <ul>
                <li><a href="blog.html"><i class="fas fa-chevron-left"></i></a></li>
                <li><a href="blog.html" class="active">1</a></li>
                <li><a href="blog.html">2</a></li>
                <li><a href="blog.html">3</a></li>
                <li><a href="blog.html">...</a></li>
                <li><a href="blog.html">10</a></li>
                <li><a href="blog.html"><i class="fas fa-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>

        @include('layouts.rigth')
    </div>
    </div>
</section>

@endsection