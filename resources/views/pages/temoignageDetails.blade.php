@extends('layouts.main')
@section('contenu')
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.jpg">
    <div class="container">
    <div class="breadcumb-content">
        <!--
        <h1 class="breadcumb-title">Blog Details</h1>
-->
    </div>
    </div>
</div>
<section class="vs-blog-wrapper blog-details space-top space-extra-bottom">
    <div class="container">
    <div class="row gx-60">
        <div class="col-lg-8">
            <div class="vs-blog blog-single">
                <div class="blog-img"><img src="{{asset('assets/img/blog/blog-single.jpg')}}" alt="BLog Img"></div>
                <div class="blog-content">
                <h2 class="blog-title"><a href="blog-details.html">Backward compatible information optimize</a></h2>
                <div class="author-meta">
                    <div class="author-avater"><img src="{{asset('assets/img/avater/blog-author.jpg')}}" alt="author"></div>
                    <div class="meta-content">
                        <h5 class="author-name"><a href="speaker-details.html">David Smith</a></h5>
                        <div class="blog-meta"><a href="blog-details.html"><i class="fal fa-eye"></i> 233 Views</a> <a href="blog-details.html"><i class="fal fa-comments"></i> 23 Comments</a> <a href="blog-details.html"><i class="fal fa-calendar-alt"></i> 22 April, 2022</a></div>
                    </div>
                </div>
                <p>Analyzing competing products or services can give you an idea of what already exists in your industry. This can help you find ways to improve your idea. It can also help you target weaknesses in your product or service before you spend time and money creating it. Be sure to note your competitor’s prices during this process, which will give you a range of how much customers are currently spending on similar products.</p>
                <p>Once you’ve worked hard researching your idea and know it has the potential to last in the market, it’s time to take your business to the next level by making it official. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi Rapidiously formulate collaborative platforms with intermandated.</p>
                <div class="blog-inner-list">
                    <ul>
                        <li>If you’ve been asking yourself “what kind of business can I start with no money?” Check out some of these business ideas...</li>
                        <li>Asking yourself “what kind of business can I start with no money?” Check out some of these business ideas that you can do part time...</li>
                    </ul>
                </div>
                <p>This can help you find ways to improve your idea. It can also help you target weaknesses in your product or service before you spend time and money creating it. Be sure to note your competitor’s prices during this process. Rapidiously formulate collaborative platforms with intermandated.</p>
                
                <p>It can also help you target weaknesses in your product or service before you spend time and money creating it. Be sure to note your competitor’s prices during this process, which will give you a range of how much customers are currently spending on similar products. Enim ad minim veniam, quis nostrud exercitation ullamco laboris during this process, which will give you a range</p>
                </div>
                <div class="share-links clearfix">
                <div class="row justify-content-between">
                    <div class="col-md-auto">
                        <span class="share-links-title">Tags:
                        </span>
                        <div class="tagcloud"><a href="blog.html">Education</a> <a href="blog.html">Kids</a> <a href="blog.html">Care</a></div>
                    </div>
                    <!--
                    <div class="col-md-auto text-md-end">
                        <span class="share-links-title">Share Now:
                        </span>
                        <ul class="multi-social">
                            <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="https://instagram.com/"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
-->
                </div>
                </div>
            </div>
        </div>

        @include('layouts.rigth')
    </div>
    </div>
</section>

@endsection