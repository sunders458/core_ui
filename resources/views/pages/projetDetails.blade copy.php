@extends('layouts.main')
@section('contenu')
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.jpg">
    <div class="container">
    <div class="breadcumb-content">
        <h1 class="breadcumb-title">Nos projets</h1>
    </div>
    </div>
</div>
<section class="vs-blog-wrapper space-top space-extra-bottom">
    <div class="container">
    <div class="row gx-60">
        <div class="col-lg-12">
            <div class="row">
                <div class="vs-blog blog-single col-lg-5">
                    <div class="blog-img"><a href="#"><img src="{{asset('assets/img/blog/blog-big-1.jpg')}}" alt="BLog Img"></a>
                    </div>
                    <div class="blog-content">
                        <h2 class="blog-title"><a href="">Notre but </a></h2>
                        
                        <p class="blog-text">In today’s world, building a business also means you’ll need a strong website and</p>
                        <br>

                        <p>
                            <span 
                                style="color:#84c54e;
                                    font-size: 1.005em;
                                    letter-spacing: -1px;
                                    font-weight: bold;
                                "
                            >
                                10 000 Fcfa
                            </span> 
                            <span 
                                style="
                                    font-size: 1.005em;
                                    letter-spacing: -1px;
                                    font-weight: bold;
                                    color:black
                                "
                            >
                            sur 10 000 000 Fcfa
                            </span> 
                        </p>
                        
                        <p>
                            <div style="width: 100%;background-color:#eee;border-radius: 20px">
                                <span style="width: 15%;background-color:#ff7e27;border-radius: 20px;">
                                    <h6 style="height:4px;text-align: center;">&nbsp;</h6>
                                </span>
                            </div>
                        </p>
                        </br> </br> </br> </br>
                        <h4 class="blog-title"><a href="#">Devenir partenaire shofar</a></h4>
                        <p class="blog-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisialiquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                        
                        <a href="#" class="vs-btn">S'enregistrer</a>
                    </div>
                </div>

                <div class="vs-blog blog-single col-lg-7">
                    <div class="blog-content">

                        <h2 class="blog-title"><a href="blog-details.html">Information strategic</a></h2>
                        
                        <p class="blog-text">
                            
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate ve
                        lit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                        sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis is
                        te natus error sit voluptatem accusantium doloremque laudantium
                        </p>
                    
                        <p>
                            <form action="#" method="POST" class="contact-form">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Nom">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Prenoms">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="number" class="form-control" name="number" id="number" placeholder="Numero de telephone">
                                    </div>
                                    
                                </div>
                                <div class="form-btn"><button class="vs-btn">Envoyer</button></div>
                                <p class="form-messages"></p>
                            </form>
                        </p>

                    </div>
                    
                </div>            
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
                </div>
                -->
            </div>
        </div>
    </div>
    </div>
</section>

@include('layouts.newletters')
@endsection