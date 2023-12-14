@extends('layouts.app')
@section('contenu')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-12">
                    <!--begin::Mixed Widget 1-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <!--begin::Header-->
                            <div class="px-9 pt-7 card-rounded h-275px w-100 bg-primary">
                                <!--begin::Heading-->
                                <div class="d-flex flex-stack">
                                    <h3 class="m-0 text-white fw-bolder fs-3">Notification</h3>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Balance-->
                                <div class="d-flex text-center flex-column text-white pt-8">
                                    <span class="fw-bold fs-7 pt-1">
                                    <center>
                                       <h1 style="color:#fff"> Merci  d'avoir choisir de payer  {{number_format(session('soutiennotif1') , 0, ',', ' ')}} F CFA pour la campagne de vie ({{ session('soutiennotif2') }})
                                        <br> Pour valider le paiment, merci d'appeler ou d'envoyer un SMS sur l'un des numeros ci-dessous pour confirmer le versement.
                                        </h1>
                                        
                                        </center>
                                    </span>
                                    <!--
                                    <span class="fw-bolder fs-2x pt-1">$37,562.00</span>
                                    -->
                                </div>
                                <!--end::Balance-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Items-->
                            <div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1" style="margin-top: -100px">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-180px w-190px me-5">
                                        <img src="{{asset('assets/img/blog/momo.jpeg')}}" alt="Blog Image">
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center flex-wrap w-100">
                                        <!--begin::Title-->
                                        <div class="mb-1 pe-3 flex-grow-1">
                                            <a href="tel:+2250506329052" class="fs-5 text-gray-800 text-hover-primary fw-bolder">+225 0506329052</a>
                                            <!--
                                            <div class="text-gray-400 fw-bold fs-7">100 Regions</div>
                                            -->
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-180px w-190px me-5">
                                        <img src="{{asset('assets/img/blog/moov.png')}}" alt="Blog Image">
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center flex-wrap w-100">
                                        <!--begin::Title-->
                                        <div class="mb-1 pe-3 flex-grow-1">
                                            <a href="tel:+2250143045588" class="fs-5 text-gray-800 text-hover-primary fw-bolder">+225 0143045588</a>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center mb-6">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-180px w-190px me-5">
                                        <img src="{{asset('assets/img/blog/orangewave.jpeg')}}">
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center flex-wrap w-100">
                                        <!--begin::Title-->
                                        <div class="mb-1 pe-3 flex-grow-1">
                                            <a href="tel:+2250707362678" class="fs-5 text-gray-800 text-hover-primary fw-bolder">+225 0707362678</a>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Item-->
                               
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 1-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->
@endsection