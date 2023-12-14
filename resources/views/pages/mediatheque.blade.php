@extends('layouts.main')
@section('contenu')
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Médiathèque</h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Accueil</a></li>
                <li class="active">Notre médaithèque</li>
            </ul>
        </div>
    </div>
</div>
<div class="space">
    <div class="container">
        <div class="project-menu mb-25 filter-menu-active">
            <button data-filter="*" class="active link-btn">Tous</button> 
            @if ($categories_galeries)
            @foreach ($categories_galeries as $item)
                <button data-filter=".cat-{{$item->id}}" class="link-btn">{{$item->libelle}}</button> 
            @endforeach
            @endif
           
        </div>
        <div class="row project-gallery justify-content-center filter-active">
            @if ($galleries)
            @foreach ($galleries as $item)
                @if ($item->image)
                    <div class="col-xxl-auto col-md-6 filter-item cat-{{$item->categorie_gallerie_id}}">
                        <div class="project-card">
                            <div class="project-img"><img src="{{url($item->image)}}" alt="project-img" /></div>
                            <a href="{{url($item->image)}}" class="plus-btn popup-image">+</a>
                        </div>
                    </div>
                @endif
            @endforeach
            @endif
           
            
            
<!--
            <div class="col-xxl-auto col-md-6 filter-item cat-1">
                <div class="project-card">
                    <div class="project-img"><img src="assets/img/gallery/gallery-4.jpg" alt="project-img" /></div>
                    <a href="assets/img/gallery/gallery-4.jpg" class="plus-btn popup-image">+</a>
                </div>
            </div>
            <div class="col-xxl-auto col-md-6 filter-item cat-3">
                <div class="project-card">
                    <div class="project-img"><img src="assets/img/gallery/gallery-5.jpg" alt="project-img" /></div>
                    <a href="assets/img/gallery/gallery-5.jpg" class="plus-btn popup-image">+</a>
                </div>
            </div>
            <div class="col-xxl-auto col-md-6 filter-item cat-2">
                <div class="project-card">
                    <div class="project-img"><img src="assets/img/gallery/gallery-6.jpg" alt="project-img" /></div>
                    <a href="assets/img/gallery/gallery-6.jpg" class="plus-btn popup-image">+</a>
                </div>
            </div>
            <div class="col-xxl-auto col-md-6 filter-item cat-2">
                <div class="project-card">
                    <div class="project-img"><img src="assets/img/gallery/gallery-7.jpg" alt="project-img" /></div>
                    <a href="assets/img/gallery/gallery-7.jpg" class="plus-btn popup-image">+</a>
                </div>
            </div>
            <div class="col-xxl-auto col-md-6 filter-item cat-1">
                <div class="project-card">
                    <div class="project-img"><img src="assets/img/gallery/gallery-8.jpg" alt="project-img" /></div>
                    <a href="assets/img/gallery/gallery-8.jpg" class="plus-btn popup-image">+</a>
                </div>
            </div>
            <div class="col-xxl-auto col-md-6 filter-item cat-3">
                <div class="project-card">
                    <div class="project-img"><img src="assets/img/gallery/gallery-9.jpg" alt="project-img" /></div>
                    <a href="assets/img/gallery/gallery-9.jpg" class="plus-btn popup-image">+</a>
                </div>
            </div>
        -->
            
        </div>

        
    </div>
</div>

@endsection