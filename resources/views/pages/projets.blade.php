@extends('layouts.main')
@section('contenu')
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Campagne de vie 2023</h1>
        </div>
    </div>
</div>
<section class="vs-blog-wrapper space-top space-extra-bottom">
    <div class="container">
        <div class="row gx-60">
            <div class="col-lg-12">
                <div class="row">

                @foreach ($data as $projet)
                    <div class="vs-blog blog-single col-lg-4">
                        <div class="blog-img"><a href="#">
                            @foreach ($projet->projectbymedias as $image)
                                @if ($loop->first)
                                    <img src="{{$image->path}}" style="heigth:"></a>
                                    @endif
                            @endforeach
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title"><a href="">{{$projet->libelle}}</a></h2>
                            
                            <p class="blog-text">{!! $projet->libelle !!}</p>
                        
                            <p>
                                <div style="width: 100%;background-color:#eee;border-radius: 20px">
                                    <span style="width: 0%;background-color:#ff7e27;border-radius: 20px;">
                                        <h6 style="height:4px;text-align: center;">&nbsp;</h6>
                                    </span>
                                </div>
                            </p>
                            
                            <a href="/login" class="vs-btn small-btn">Soutenir</a>
                        </div>
                    </div>
                @endforeach
                    

                    
                    
                    {{--<div class="vs-blog blog-single tag-post-formats tag-quote format-quote">
                        <div class="blog-content">
                        <div class="author-meta">
                            
                            <div class="meta-content">
                                <h5 class="author-name"><a href="speaker-details.html">David Smith</a></h5>
                                <div class="blog-meta"><a href="blog-details.html"><i class="fal fa-eye"></i> 233 Views</a> <a href="blog-details.html"><i class="fal fa-comments"></i> 23 Comments</a> <a href="blog-details.html"><i class="fal fa-calendar-alt"></i> 28 April, 2022</a></div>
                            </div>
                        </div>
                        </div>
                    </div>--}}

                    <!--
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
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection