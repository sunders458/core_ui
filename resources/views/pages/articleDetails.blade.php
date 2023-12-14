@extends('layouts.main')
@section('contenu')
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Details de l'article</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Accueil</a></li>
                <li class="active">Details de l'article</li>
            </ul>
        </div>
    </div>
</div>
<section class="vs-blog-wrapper blog-details space-top space-extra-bottom">
    <div class="container">
       <div class="row gx-60">
          <div class="col-lg-8">
             <div class="vs-blog blog-single">
                @if ($article->image)
                <div class="blog-img">
                    <img src="{{url($article->image)}}" alt="Article Image">
                </div>
                @endif
               
                <div class="blog-content">


                   <h2 class="blog-title"><a href="blog-details.html">{{$article->title}}</a></h2>
                   
                   {!! $article->contenu !!}

                </div>
                <div class="share-links clearfix">
                   <div class="row justify-content-between">

                        <div class="col-md-auto">

                            {{--<span class="share-links-title">Tags:
                            </span>
                            <div class="tagcloud">
                                <a href="blog.html">Education</a> 
                                <a href="blog.html">Kids</a> 
                                <a href="blog.html">Care</a>
                            </div>--}}
                        </div>
                        <div class="col-md-auto text-md-end">
                            <span class="share-links-title">Partage maintenant:
                            </span>
                            <ul class="multi-social">
                                <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://instagram.com/"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-4">
                <aside class="sidebar-area">

                    {{--<div class="widget widget_search">
                    <h4 class="widget_title">Recherche</h4>
                    <form class="search-form">
                        <input type="text" placeholder="Rechercher ici"> <button type="submit"><i class="far fa-search"></i></button>
                    </form>
                    </div>

                    <div class="widget widget_categories">
                    <h4 class="widget_title">Categories</h4>
                    <ul>
                        <li><a href="blog.html">Business Meetup</a> 
                            <span>10
                            </span>
                        </li>
                        
                    </ul>
                    </div>
                    
                    <div class="widget">
                    <h4 class="widget_title">Popular Posts</h4>
                    <div class="recent-post-wrap">
                        <div class="recent-post">
                            <div class="media-img"><a href="blog-details.html"><img src="assets/img/blog/thumb-1.jpg" alt="Blog Image"></a></div>
                            <div class="media-body">
                                <h4 class="post-title"><a href="blog-details.html">You can now listen to the entire</a></h4>
                                <div class="recent-post-meta"><a href="blog.html"><i class="fal fa-calendar-alt"></i> Apr 22, 2022</a> <a href="blog.html">3 Mins Read</a></div>
                            </div>
                        </div>
                        <div class="recent-post">
                            <div class="media-img"><a href="blog-details.html"><img src="assets/img/blog/thumb-2.jpg" alt="Blog Image"></a></div>
                            <div class="media-body">
                                <h4 class="post-title"><a href="blog-details.html">How to in success business</a></h4>
                                <div class="recent-post-meta"><a href="blog.html"><i class="fal fa-calendar-alt"></i> Apr 23, 2022</a> <a href="blog.html">3 Mins Read</a></div>
                            </div>
                        </div>
                        <div class="recent-post">
                            <div class="media-img"><a href="blog-details.html"><img src="assets/img/blog/thumb-3.jpg" alt="Blog Image"></a></div>
                            <div class="media-body">
                                <h4 class="post-title"><a href="blog-details.html">Super business plan in 2022</a></h4>
                                <div class="recent-post-meta"><a href="blog.html"><i class="fal fa-calendar-alt"></i> Apr 24, 2022</a> <a href="blog.html">3 Mins Read</a></div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="widget widget_tag_cloud">
                    <h4 class="widget_title">Most Used Tags</h4>
                    <div class="tagcloud"><a href="blog.html">UI/UX</a> <a href="blog.html">Service</a> <a href="blog.html">Development</a> <a href="blog.html">Business</a> <a href="blog.html">Event</a></div>
                    </div>--}}

                </aside>
          </div>
       </div>
    </div>
 </section>
@endsection