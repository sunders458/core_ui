@extends('layouts.app')
@section('contenu')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Blog Home</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Pages</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Blog</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">Blog Home</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Home card-->
                <div class="card">
                    <!--begin::Body-->
                    <div class="card-body p-lg-20">
                        <!--begin::Section-->
                        <div class="mb-17">
                            <!--begin::Title-->
                            <h3 class="text-dark mb-7">{{$projet->libelle}}</h3>
                            <!--end::Title-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mb-9"></div>
                            <!--end::Separator-->
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-md-6">
                                    <!--begin::Feature post-->
                                    <div class="h-100 d-flex flex-column justify-content-between pe-lg-6 mb-lg-0 mb-10">
                                        <!--begin::Video-->
                                        <div class="mb-3">
                                            <iframe class="embed-responsive-item card-rounded h-275px w-100" src="https://www.youtube.com/embed/TWdDZYNqlg4" allowfullscreen="allowfullscreen"></iframe>
                                        </div>
                                        <!--end::Video-->
                                        <!--begin::Body-->
                                        <div class="mb-5">
                                            <!--begin::Text-->
                                            <div class="fw-bold fs-5 text-gray-600 text-dark mt-4">
                                                {{$projet->description}}
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Feature post-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6 justify-content-between d-flex flex-column">
                                    <!--begin::Post-->
                                    <div class="ps-lg-6 mb-16 mt-md-0 mt-17">
                                        <!--begin::Body-->
                                        <div class="mb-6">
                                            <!--begin::Title-->
                                            <a href="#" class="fw-bolder text-dark mb-4 fs-2 lh-base text-hover-primary">Avertissements</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-bold fs-5 mt-4 text-gray-600 text-dark">
                                            We’ve been focused on making the from v4 to v5 a but we’ve also not
                                             been afraid to step away been focused on from v4 to v5 speaker approachable making focused
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mb-9"></div>
                                    <!--end::Separator-->
                                    <!--end::Post-->
                                    <!--begin::Post-->
                                    <div class="ps-lg-6 mb-16">
                                        <!--begin::Body-->
                                        <div class="mb-6">
                                            <!--begin::Title-->
                                            <a href="#" class="fw-bolder text-dark mb-4 fs-2 lh-base text-hover-primary">Montant proposés</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-bold fs-5 mt-4 text-gray-600 text-dark">
                                            We’ve been focused on making the from v4 to v5 a but we’ve also not been afraid to step away
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Body-->
                                        <!--begin::Footer-->
                                        <div class="d-flex flex-stack flex-wrap">
                                            <!--begin::Item-->
                                            {!! Form::open(array('id'=>'kt_project_settings_form', 'class'=>'form', 'route' => 'project.paiement.store','method'=>'POST')) !!}
                                            <div class="d-flex align-items-center mt-3">
                                                <!--begin::Option-->
                                                <label class="form-check form-check-inline form-check-solid me-5">
                                                <!--
                                                    <input class="form-check-input" name="communication[]" type="radio" value="1" />
                                                    -->
                                                    {{ Form::radio('montant', 5000, false, ['class'=>'form-check-input']) }}
                                                    <span class="fw-bold ps-2 fs-6"> 5 000 F cfa</span>
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label class="form-check form-check-inline form-check-solid">
                                                    {{ Form::radio('montant', 10000, false, ['class'=>'form-check-input']) }}
                                                    <span class="fw-bold ps-2 fs-6">10 000 F cfa</span>
                                                </label>
                                                <!--end::Option-->
                                                {{ Form::hidden('projet_id', $projet->id, false, ['class'=>'form-check-input']) }}
                                                {{ Form::hidden('user_id', Auth::user()->id, false, ['class'=>'form-check-input']) }}
                                            </div>
                                            <!--begin::Actions-->
											<div class="d-flex justify-content-end py-6 px-9">
												<button type="reset" class="btn btn-light btn-active-light-primary me-2">Annulez</button>
												<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Envoyer</button>
											</div>
											<!--end::Actions-->

                                            {!! Form::close() !!}
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                    <!--end::Post-->
                                    <!--begin::Post-->
                                    <div class="ps-lg-6">
                                        <!--begin::Body-->
                                        <div class="mb-6">
                                            <!--begin::Title-->
                                            <a href="#" class="fw-bolder text-dark mb-4 fs-2 lh-base text-hover-primary">React Admin Theme - How To Get Started Tutorial. Create best applications</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-bold fs-5 mt-4 text-gray-600 text-dark">We’ve been focused on making the from v4 to v5 but we’ve also not been afraid to step away been focused</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Body-->
                                        <!--begin::Footer-->
                                        <div class="d-flex flex-stack flex-wrap">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center pe-2">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle me-3">
                                                    <img src="assets/media/avatars/300-19.jpg" class="" alt="" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Text-->
                                                <div class="fs-5 fw-bolder">
                                                    <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">Cris Morgan</a>
                                                    <span class="text-muted">on Mar 14 2021</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light-warning fw-bolder my-2">NEWS</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Footer-->
                                    </div>
                                    <!--end::Post-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--begin::Row-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="mb-17">
                            <!--begin::Content-->
                            <div class="d-flex flex-stack mb-5">
                                <!--begin::Title-->
                                <h3 class="text-dark">Video Tutorials</h3>
                                <!--end::Title-->
                                <!--begin::Link-->
                                <a href="#" class="fs-6 fw-bold link-primary">View All Videos</a>
                                <!--end::Link-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mb-9"></div>
                            <!--end::Separator-->
                            <!--begin::Row-->
                            <div class="row g-10">
                                <!--begin::Col-->
                                <div class="col-md-4">
                                    <!--begin::Feature post-->
                                    <div class="card-xl-stretch me-md-6">
                                        <!--begin::Image-->
                                        <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-73.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/btornGtLwIo">
                                            <img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" />
                                        </a>
                                        <!--end::Image-->
                                        <!--begin::Body-->
                                        <div class="m-0">
                                            <!--begin::Title-->
                                            <a href="../../demo1/dist/pages/user-profile/overview.html" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-bold fs-5 text-gray-600 text-dark my-4">We’ve been focused on making a the from also not been afraid to and step away been focused create eye</div>
                                            <!--end::Text-->
                                            <!--begin::Content-->
                                            <div class="fs-6 fw-bolder">
                                                <!--begin::Author-->
                                                <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">Jane Miller</a>
                                                <!--end::Author-->
                                                <!--begin::Date-->
                                                <span class="text-muted">on Mar 21 2021</span>
                                                <!--end::Date-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Feature post-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4">
                                    <!--begin::Feature post-->
                                    <div class="card-xl-stretch mx-md-3">
                                        <!--begin::Image-->
                                        <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-74.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/btornGtLwIo">
                                            <img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" />
                                        </a>
                                        <!--end::Image-->
                                        <!--begin::Body-->
                                        <div class="m-0">
                                            <!--begin::Title-->
                                            <a href="../../demo1/dist/pages/user-profile/overview.html" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-bold fs-5 text-gray-600 text-dark my-4">We’ve been focused on making the from v4 to v5 but we have also not been afraid to step away been focused</div>
                                            <!--end::Text-->
                                            <!--begin::Content-->
                                            <div class="fs-6 fw-bolder">
                                                <!--begin::Author-->
                                                <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">Cris Morgan</a>
                                                <!--end::Author-->
                                                <!--begin::Date-->
                                                <span class="text-muted">on Apr 14 2021</span>
                                                <!--end::Date-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Feature post-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4">
                                    <!--begin::Feature post-->
                                    <div class="card-xl-stretch ms-md-6">
                                        <!--begin::Image-->
                                        <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('assets/media/stock/600x400/img-47.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/TWdDZYNqlg4">
                                            <img src="assets/media/svg/misc/video-play.svg" class="position-absolute top-50 start-50 translate-middle" alt="" />
                                        </a>
                                        <!--end::Image-->
                                        <!--begin::Body-->
                                        <div class="m-0">
                                            <!--begin::Title-->
                                            <a href="../../demo1/dist/pages/user-profile/overview.html" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-bold fs-5 text-gray-600 text-dark my-4">We’ve been focused on making the from v4 to v5 but we’ve also not been afraid to step away been focused</div>
                                            <!--end::Text-->
                                            <!--begin::Content-->
                                            <div class="fs-6 fw-bolder">
                                                <!--begin::Author-->
                                                <a href="../../demo1/dist/pages/user-profile/overview.html" class="text-gray-700 text-hover-primary">Carles Nilson</a>
                                                <!--end::Author-->
                                                <!--begin::Date-->
                                                <span class="text-muted">on May 14 2021</span>
                                                <!--end::Date-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Feature post-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="mb-17">
                            <!--begin::Content-->
                            <div class="d-flex flex-stack mb-5">
                                <!--begin::Title-->
                                <h3 class="text-dark">Hottest Bundles</h3>
                                <!--end::Title-->
                                <!--begin::Link-->
                                <a href="#" class="fs-6 fw-bold link-primary">View All Offers</a>
                                <!--end::Link-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mb-9"></div>
                            <!--end::Separator-->
                            <!--begin::Row-->
                            <div class="row g-10">
                                <!--begin::Col-->
                                <div class="col-md-4">
                                    <!--begin::Hot sales post-->
                                    <div class="card-xl-stretch me-md-6">
                                        <!--begin::Overlay-->
                                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x400/img-23.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x400/img-23.jpg')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-2x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Overlay-->
                                        <!--begin::Body-->
                                        <div class="mt-5">
                                            <!--begin::Title-->
                                            <a href="#" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-bold fs-5 text-gray-600 text-dark mt-3">We’ve been focused on making a the from also not been eye</div>
                                            <!--end::Text-->
                                            <!--begin::Text-->
                                            <div class="fs-6 fw-bolder mt-5 d-flex flex-stack">
                                                <!--begin::Label-->
                                                <span class="badge border border-dashed fs-2 fw-bolder text-dark p-2">
                                                <span class="fs-6 fw-bold text-gray-400">$</span>28</span>
                                                <!--end::Label-->
                                                <!--begin::Action-->
                                                <a href="#" class="btn btn-sm btn-primary">Purchase</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Hot sales post-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4">
                                    <!--begin::Hot sales post-->
                                    <div class="card-xl-stretch mx-md-3">
                                        <!--begin::Overlay-->
                                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x600/img-14.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x600/img-14.jpg')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-2x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Overlay-->
                                        <!--begin::Body-->
                                        <div class="mt-5">
                                            <!--begin::Title-->
                                            <a href="#" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-bold fs-5 text-gray-600 text-dark mt-3">We’ve been focused on making a the from also not been eye</div>
                                            <!--end::Text-->
                                            <!--begin::Text-->
                                            <div class="fs-6 fw-bolder mt-5 d-flex flex-stack">
                                                <!--begin::Label-->
                                                <span class="badge border border-dashed fs-2 fw-bolder text-dark p-2">
                                                <span class="fs-6 fw-bold text-gray-400">$</span>27</span>
                                                <!--end::Label-->
                                                <!--begin::Action-->
                                                <a href="#" class="btn btn-sm btn-primary">Purchase</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Hot sales post-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4">
                                    <!--begin::Hot sales post-->
                                    <div class="card-xl-stretch ms-md-6">
                                        <!--begin::Overlay-->
                                        <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/600x400/img-71.jpg">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x400/img-71.jpg')"></div>
                                            <!--end::Image-->
                                            <!--begin::Action-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <i class="bi bi-eye-fill fs-2x text-white"></i>
                                            </div>
                                            <!--end::Action-->
                                        </a>
                                        <!--end::Overlay-->
                                        <!--begin::Body-->
                                        <div class="mt-5">
                                            <!--begin::Title-->
                                            <a href="#" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">25 Products Mega Bundle with 50% off discount amazing</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-bold fs-5 text-gray-600 text-dark mt-3">We’ve been focused on making a the from also not been eye</div>
                                            <!--end::Text-->
                                            <!--begin::Text-->
                                            <div class="fs-6 fw-bolder mt-5 d-flex flex-stack">
                                                <!--begin::Label-->
                                                <span class="badge border border-dashed fs-2 fw-bolder text-dark p-2">
                                                <span class="fs-6 fw-bold text-gray-400">$</span>25</span>
                                                <!--end::Label-->
                                                <!--begin::Action-->
                                                <a href="#" class="btn btn-sm btn-primary">Purchase</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Hot sales post-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Section-->
                        <!--begin::latest instagram-->
                        <div class="">
                            <!--begin::Section-->
                            <div class="m-0">
                                <!--begin::Content-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Title-->
                                    <h3 class="text-dark">Latest Instagram Posts</h3>
                                    <!--end::Title-->
                                    <!--begin::Link-->
                                    <a href="#" class="fs-6 fw-bold link-primary">View Instagram</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed border-gray-300 mb-9 mt-5"></div>
                                <!--end::Separator-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Row-->
                            <div class="row g-10 row-cols-2 row-cols-lg-5">
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/900x600/16.jpg">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/900x600/16.jpg')"></div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="bi bi-eye-fill fs-2x text-white"></i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/900x600/13.jpg">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/900x600/13.jpg')"></div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="bi bi-eye-fill fs-2x text-white"></i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/900x600/19.jpg">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/900x600/19.jpg')"></div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="bi bi-eye-fill fs-2x text-white"></i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/900x600/15.jpg">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/900x600/15.jpg')"></div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="bi bi-eye-fill fs-2x text-white"></i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col">
                                    <!--begin::Overlay-->
                                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="assets/media/stock/900x600/12.jpg">
                                        <!--begin::Image-->
                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/900x600/12.jpg')"></div>
                                        <!--end::Image-->
                                        <!--begin::Action-->
                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                            <i class="bi bi-eye-fill fs-2x text-white"></i>
                                        </div>
                                        <!--end::Action-->
                                    </a>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--begin::Row-->
                        </div>
                        <!--end::latest instagram-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Home card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection