@extends('layouts.main')
@section('contenu')
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.jpg">
    <div class="container">
    <div class="breadcumb-content">
        <h1 class="breadcumb-title">Nos projets</h1>
    </div>
    </div>
</div>
<section class="bg-smoke space bg-auto-top-left" data-bg-src="{{asset('assets/img/bg/contact_bg_1.png')}}">
   
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="vs-blog blog-single col-lg-12">
                    <div class="blog-img"><a href="#">
                        <img src="{{asset('assets/img/blog/blog-big-1.jpg')}}" alt="BLog Img"></a>
                    </div>
                    <div class="blog-content">
                        <h2 class="blog-title"><a href="">Notre but</a></h2>
                        <p class="blog-text">In today’s world, building a business also means you’ll need a strong website and</p>
                        <br>
                        <p>
                            <div style="width: 100%;background-color:#eee;border-radius: 20px">
                                <span style="width: 15%;background-color:#ff7e27;border-radius: 20px;">
                                    <h6 style="height:4px;text-align: center;">&nbsp;</h6>
                                </span>
                            </div>
                        </p>                    
                    </div>
                </div>
                <div class="contact-tab-wrapper">
                    <!--
                    
                                    -->
                    <div class="tab-content contact-tab-area" id="contact-tab-area">
                        <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">

                            <div class="contact-tab-content">
                                <h3 class="contact-tab_title">Devenir partenaire shofar</h3>
                                <p class="blog-text">Ut enim ad minim veniam, quis nostrud exercitation 
                                    ullamco laboris nisialiquip ex ea commodo consequat.culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                                    laudantium.
                                </p>
                                <a href="#" class="vs-btn small-btn">S'enregistrer</a>
                                <!--
                                <div class="follow-card">
                                    <span class="card-title">Follow Us:
                                    </span>
                                    <div class="simple-social">
                                        <a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a> 
                                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a> 
                                        <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a> 
                                        <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a> 
                                        <a href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                                -->
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="row">
                    <div class="blog-content">
                        <h2 class="blog-title"><a href="">Notre but</a></h2>
                        <div class="blog-meta"><a href=""><i class="fal fa-calendar-alt"></i> 12 Janvier, 2023</a></div>
                        <p class="blog-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate ve
                        lit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                        sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis is
                        te natus error sit voluptatem accusantium doloremque laudantium</p>
                        <br>
                        <h2 class="blog-title"><a href="">Formulaire de don</a></h2>
                    </div>

                </div>
                
                <form action="#" method="POST" class="contact-form">

                    <div class="nav tab-style5" id="tab-style5" role="tablist">
                        <button class="tab-btn active" id="nav-one-tab" data-bs-toggle="tab" data-bs-target="#nav-one" type="button" role="tab" aria-controls="nav-one" aria-selected="true">Information personel</button>  
                    </div> <br><br>
                    <div class="row gx-20">
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nom">
                        </div>
                        <div class="form-group col-md-7">
                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Prenoms">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="number" class="form-control" name="number" id="number" placeholder="Téléphone">
                        </div>
                        <div class="form-group col-md-8">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                    </div>
                <div class="form-btn"><button class="vs-btn">Envoyer</button></div>
                <p class="form-messages"></p>
                </form>
            </div>
        </div>
    </div>
    
</section>
@endsection