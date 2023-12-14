@extends('layouts.main')
@section('contenu')
<div class="breadcumb-wrapper" data-bg-src="{{asset('assets/img/bg/breadcrumb-bg.jpg')}}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title"> <span style="text-transform: uppercase;">à</span> propos de nous</h1>
           
        </div>
    </div>
</div>
<section class="space">
    <div class="container">
    <div class="row">
        <div class="col-lg-6 pe-xl-5">
            <div class="about-img"><img src="{{asset('assets/img/normal/en-savoir-plus2.jpg')}}" alt="about image" class="w-100"></div>
        </div>
        <div class="col-lg-6 align-self-center">
            <div class="title-area text-sm-start text-center mb-30">
                <h2 class="sub-title">Présentation!
                </h2>
                <h2 class="sec-title">Qui sommes-nous?</h2>
            </div>
            <p class="mb-40 text-sm-start text-center">
            Shofar-Vie est une mission d'évangélisation holistique, inter-ecclésiastique, travaillant à répandre l’évangile à travers les nations,
                pour que chaque être humain puisse faire une expérience complète du salut en Jésus-Christ. <br>
                Créé en 2019 à Abidjan (Côte d'ivoire), Shofar-Vie est dirigée par son président, 
               l'Evangéliste <strong>Thomas YAO</strong> , Pasteur principal de l'Eglise des Assemblées de DIEU Angré Star 5 (Temple de la Victoire).<br>

               Depuis sa création, la Mission Shofar-Vie sillonne les nations pour y annoncer le royaume de DIEU.
               Shofar-Vie est organisé en cinq(5) départements ministériels et seize(16) commissions techniques pour accomplir cette vision.

            </p>
            <div class="info-box">
                <div class="info-box_icon"><img src="{{asset('assets/img/icon/speaker-2.png')}}" alt="icon"></div>
                <div class="media-body">
                <h3 class="info-box_title">Nos Objectifs</h3>
                <p class="info-box_text">
                - Le salut des peuples non atteints <br>
                - Le reveil spirituel des nations <br>
                - Manifester l'amour des actions sociales <br>
                Au regard des statistiques sur les réligions en Côte d'ivoire, la moisson est très grande.
                </p>
                </div>
            </div>
            <!--
            <div class="info-box">
                <div class="info-box_icon"><img src="{{asset('assets/img/icon/hand-flag-2.png')}}" alt="icon"></div>
                <div class="media-body">
                <h3 class="info-box_title">15+ Main Sponsors</h3>
                <p class="info-box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                </div>
            </div>
            -->
        </div>
    </div>
    </div>
</section>
<section class="space" data-bg-src="{{asset('assets/img/bg/counter_bg_2.jpg')}}">
    {{--<div class="container">
    <div class="row gy-40 justify-content-between">
        <div class="col-lg-auto col-sm-6">
            <div class="counter-box" id="equipes">
                <div class="counter-box_icon"><img src="{{asset('assets/img/icon/cr-1.png')}}" alt="icon"></div>
                <div class="counter-box_info">
                <h2 class="counter-number">590</h2>
                <span class="counter-box_text">Equipes
                </span>
                </div>
            </div>
        </div>
        <div class="col-lg-auto col-sm-6">
            <div class="counter-box">
                <div class="counter-box_icon"><img src="{{asset('assets/img/icon/cr-2.png')}}" alt="icon"></div>
                <div class="counter-box_info">
                <h2 class="counter-number">55</h2>
                <span class="counter-box_text">Projets
                </span>
                </div>
            </div>
        </div>
        <div class="col-lg-auto col-sm-6">
            <div class="counter-box">
                <div class="counter-box_icon"><img src="{{asset('assets/img/icon/cr-3.png')}}" alt="icon"></div>
                <div class="counter-box_info">
                <h2 class="counter-number">22</h2>
                <span class="counter-box_text">Presonnes touchées
                </span>
                </div>
            </div>
        </div>
        <div class="col-lg-auto col-sm-6">
            <div class="counter-box">
                <div class="counter-box_icon"><img src="{{asset('assets/img/icon/cr-4.png')}}" alt="icon"></div>
                <div class="counter-box_info">
                <h2 class="counter-number">190</h2>
                <span class="counter-box_text">Âmes gagnées
                </span>
                </div>
            </div>
        </div>
    </div>
    </div>--}}
</section>

<!-- Notre histoire-->
<section class="space" id="histoire">
    <div class="container" >
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="title-area text-sm-start text-center mb-30">
                    <h2 class="sub-title">
                    </h2>
                    <h2 class="sec-title">Notre histoire</h2>
                </div>
                <p class="mb-40 text-sm-start text-center">
                Crée en 2019 à Abidjan (Côte d’Ivoire), la mission d’évangélisation Shofar vie 
                dirigé par son président fondateur, l’évangéliste <strong>YAO Thomas</strong> pasteur principale de l’église des Assemblées de DIEU Angré Star 5 temple de la victoire; est une mission d'évangélisation holistique, inter-ecclésiastique.
                
                

                </p>
                <div class="info-box">
                    <div class="info-box_icon">
                    <img src="{{asset('assets/img/icon/speaker-2.png')}}" alt="icon">
                    </div>
                    <div class="media-body">
                    <h3 class="info-box_title"></h3>
                    <p class="info-box_text">
                    Depuis sa création, la Mission Shofar-Vie sillonne les nations pour y annoncer le royaume de DIEU.
                Shofar-Vie est organisé en cinq(5) départements ministériels et seize(16) commissions techniques 
                pour accomplir cette vision.
                    </p>
                </div>
            </div>
                    
                </div>
                <div class="col-lg-6 pe-xl-5">
                    <div class="about-img"><img src="{{asset('assets/img/normal/en-savoir-plus2.jpg')}}" alt="about image" class="w-100"></div>
                </div>
                
        </div>
    </div>
</section>
<!-- end Notre histoire-->
<section class="space" data-bg-src="{{asset('assets/img/bg/counter_bg_2.jpg')}}">
    <div class="container">
        <div class="row gy-40 justify-content-between">
            <div class="col-lg-auto col-sm-6">
                <div class="counter-box">
                    
                </div>
            </div>
            <div class="col-lg-auto col-sm-6">
                <div class="counter-box">
                    
                </div>
            </div>
            <div class="col-lg-auto col-sm-6">
                <div class="counter-box">
                    
                </div>
            </div>
            <div class="col-lg-auto col-sm-6">
                <div class="counter-box">
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Notre Vision-->
<section class="space" id="vision">
    <div class="container" >
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="title-area text-sm-start text-center mb-30">
                    <h2 class="sub-title">
                    </h2>
                    <h2 class="sec-title">Notre Vision</h2>
                </div>
                <p class="mb-40 text-sm-start text-center">

                Shofar-Vie à pour vision de gagner les nations à Jésus-Christ à travers un Evangile holistique.

                

                </p>
                <div class="info-box">
                    
                    <div class="media-body">
                    <h3 class="info-box_title"></h3>
                    <p class="info-box_text">
                    </p>
                </div>
            </div>
                    <!--
                    <div class="info-box">
                        <div class="info-box_icon"><img src="{{asset('assets/img/icon/hand-flag-2.png')}}" alt="icon"></div>
                        <div class="media-body">
                        <h3 class="info-box_title">15+ Main Sponsors</h3>
                        <p class="info-box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                        </div>
                    </div>
                    -->
                </div>
                <div class="col-lg-6 pe-xl-5">
                    <div class="about-img"><img src="{{asset('assets/img/normal/en-savoir-plus2.jpg')}}" alt="about image" class="w-100"></div>
                </div>
                
        </div>
    </div>
</section>
<!-- end Vision-->

<!-- Notre Mission-->
<section class="space" data-bg-src="{{asset('assets/img/bg/counter_bg_2.jpg')}}">
    <div class="container">
        <div class="row gy-40 justify-content-between">
            <div class="col-lg-auto col-sm-6">
                <div class="counter-box">
                    
                </div>
            </div>
            <div class="col-lg-auto col-sm-6">
                <div class="counter-box">
                    
                </div>
            </div>
            <div class="col-lg-auto col-sm-6">
                <div class="counter-box">
                    
                </div>
            </div>
            <div class="col-lg-auto col-sm-6">
                <div class="counter-box">
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Notre Mission-->
<section class="space" id="mission">
    <div class="container" >
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="title-area text-sm-start text-center mb-30">
                    <h2 class="sub-title">
                    </h2>
                    <h2 class="sec-title">Notre Mission</h2>
                </div>
                <p class="mb-40 text-sm-start text-center">
                La mission de Shofar-Vie vise à impulser un réveil spirituel dans les nations, 
                à renforcer les capacités des leaders chrétiens et à mener des actions sociales 
                pour atteindre les couches sociales les plus défavorisés.

                </p>
                <div class="info-box">
                    <div class="info-box_icon"><img src="{{asset('assets/img/icon/speaker-2.png')}}" alt="icon"></div>
                    <div class="media-body">
                    <h3 class="info-box_title"></h3>
                    <p class="info-box_text">
                    Pour la réalisation de sa mission, Shofar-Vie est organisé en cinq départements ministériels et seize commissions techniques.
                    </p>
                </div>
            </div>
                    <!--
                    <div class="info-box">
                        <div class="info-box_icon"><img src="{{asset('assets/img/icon/hand-flag-2.png')}}" alt="icon"></div>
                        <div class="media-body">
                        <h3 class="info-box_title">15+ Main Sponsors</h3>
                        <p class="info-box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>
                        </div>
                    </div>
                    -->
                </div>
                <div class="col-lg-6 pe-xl-5">
                    <div class="about-img"><img src="{{asset('assets/img/normal/en-savoir-plus2.jpg')}}" alt="about image" class="w-100"></div>
                </div>
                
        </div>
    </div>
</section>
<!-- end Mission-->

<section class="space-top space-extra-bottom">
    <div class="container">
    <div class="row gy-30 align-items-center">
        <div class="col-lg-4">
            <div class="text-center text-lg-start">
                <span class="sub-title">Equipe Shofar-Vie
                </span>
                
                {{--<p class="mb-30">
                    Monotonectally conceptualize economically sound value after
                     accurate growth strategies. Quickly parallel task client-centric materials technologies.
                </p>--}}
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row testi-slider vs-carousel" id="testi1" data-slide-show="2">
                <div class="col-md-6">
                <div class="testi-grid">
                {{--<div class="testi-avater">
                        <img src="{{asset('assets/img/testimonial/avator-1.jpg')}}" alt="testimonial">
                        <div class="testi-quote"><img src="{{asset('assets/img/icon/quote-3.png')}}" alt="icon"></div>
                    </div>--}}
                    <!--<h3 class="testi-title">They Are Amazing</h3>
                    <p class="testi-text">Total linkage rather than holisticlis 
                    markets. ransition enabled niches cross media benefits world..</p>
                    -->
                    <div class="testi-author">
                        <h5 class="name">Pasteur YAO Thomas</h5>
                        <span class="desig">Président
                        </span>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                    <div class="testi-grid">
                        <div class="testi-author">
                            <h5 class="name">N'GUESSAN Kouamé Adigri</h5>
                            <span class="desig">Directeur des campagnes
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testi-grid">
                        <div class="testi-author">
                            <h5 class="name">Ancien BADOU Atta</h5>
                            <span class="desig">Directeur administratif, financier et juridique
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testi-grid">
                        <div class="testi-author">
                            <h5 class="name">FLEGOULO Guy Eric</h5>
                            <span class="desig">Directeur des actions missionnaires
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testi-grid">
                        <div class="testi-author">
                            <h5 class="name">Ancien ASSANE Potho</h5>
                            <span class="desig">Directeur des actions de réveil
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testi-grid">
                        <div class="testi-author">
                            <h5 class="name">ALLOKO Hénoc</h5>
                            <span class="desig">Directeur de la formation et du discipolat
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testi-grid">
                        <div class="testi-author">
                            <h5 class="name"> Diacre ADON Franck</h5>
                            <span class="desig">Directeur de la levée des fonds et du suivi des partenaires 
                            </span>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    </div>
</section>


<!-- Notre Mission-->
<section class="space" data-bg-src="{{asset('assets/img/bg/counter_bg_2.jpg')}}">
    <div class="container">
        <div class="row gy-40 justify-content-between">
            <div class="col-lg-auto col-sm-6">
                <div class="counter-box">
                    
                </div>
            </div>
            <div class="col-lg-auto col-sm-6">
                <div class="counter-box">
                    
                </div>
            </div>
            <div class="col-lg-auto col-sm-6">
                <div class="counter-box">
                    
                </div>
            </div>
            <div class="col-lg-auto col-sm-6">
                <div class="counter-box">
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Notre benovole-->

<section class="bg-smoke space" id="benevole">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-xl-7 col-lg-6 order-2 order-lg-1">
                <div class="register-form-wrapper">
                    <h3 class="form-title">Remplissez vos informations</h3>
                    <form action="{{route('missionaire.store')}}" method="post" class="register-form">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nom & Prenoms
                            </label> 
                            <input type="text" class="form-control" name="name" id="name" placeholder="Entrez votre nom">
                        </div>
                        <div class="form-group">
                            <label for="country">
                                Pays
                            </label> 

                            <select name="country" id="" class="form-control">
                                <option value="">Choisir </option>
                                @foreach ($pays as $item)
                                <option value="">{{$item->libelle}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="form-group ">
                            <label for="email">Email
                            </label> 
                            <input type="email" class="form-control" name="email" id="email" placeholder="Entrez votre Email">
                        </div>

                        <div class="form-group">
                            <label for="email">Téléphone*
                            </label> 
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Saisir votre numero de téléphone">
                        </div>
                        <div class="form-group">
                            <label for="eglise">Eglise / Communauté *
                            </label> 
                            <input type="text" class="form-control" name="eglise" id="eglise" placeholder="Saisir votre église">
                        </div>
                        <div class="form-group">
                        <label for="message">Qu'est ce qui vous motive à intégrer ce ministère
                            </label>
                            <textarea name="message" class="form-control" id="message" placeholder="Saisir votre message...">
                            </textarea>
                        </div>

                        {{--<p class="custom-checkbox">
                            <input id="term-agreement" type="checkbox" name="term-agreement" value="agree"> 
                            <label for="term-agreement">I accept the terms of use and privacy policy*
                            </label>
                        </p>--}}
                        <div class="form-btn"><button class="vs-btn">Rejoindre</button></div>
                        <p class="form-messages"></p>
                    </form>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 mt-40 mt-lg-0 order-1 order-lg-2">
                <h2>Devenir missionnaire shofar-vie</h2>
                <p>
                    Saisissez aujourd'hui l'occasion de répondre à l'appel du maitre Jésus en parcourant les nations pour répandre la bonne nouvelle de l'Evangile.
                     
                </p>
                <p class="mb-30">
                
                Vous pouvez rejoindre la mission Shofar-Vie en tant que Missionnaire dans une commission technique, en soutenant les campagnes en prière mais aussi par vos dons.
                   
                </p>
                <div class="nav tab-style4" id="tab-style4" role="tablist">
                    <button class="vs-btn active" id="nav-one-tab" data-bs-toggle="tab" data-bs-target="#nav-one" type="button" role="tab" aria-controls="nav-one" aria-selected="true">Infoline</button> 
                    
                </div>
                <div class="tab-content qa-tab-content" id="qa-tab-content">
                    <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                    <p class="mb-30 mt-30">
                    {{--
                        Competently exploit equity invested action items without
                         e-business outsourcing.
                         --}}
                    </p>
                    <div class="info-grid">
                        <i class="fal fa-phone"></i>
                        <div class="media-body">
                            <h5 class="info-grid_title"><a href="tel:+2250707250970">+(225) 07 07 250 970</a></h5>

                            <p class="info-grid_text">
                                N'hésitez pas à nous appeler
                            </p>

                        </div>
                    </div>
                    
                        <div class="info-grid">
                        <i class="fal fa-map-marker-alt"></i>
                        <div class="media-body">
                            <h5 class="info-grid_title">Localisation:</h5>
                            <p class="info-grid_text">27 BP 445 Abidjan 27, Abidjan Cocody, Angré rue L63</p>
                        </div>
                    </div>
                
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end benovole-->
@endsection