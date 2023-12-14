@extends('layouts.app')
@section('contenu')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Hero card-->
            <div class="card mb-12">
            </div>
            <!--end::Hero card-->
            <!--begin::Post card-->
            <div class="card">
                <!--begin::Body-->
                <div class="card-body p-lg-15 pb-lg-0">
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-xl-row">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid me-xl-15">
                           <!--begin::Section-->
                            <div class="mb-17">
                            <div class="d-flex flex-stack mb-5">
                                    <!--begin::Title-->
                                    <h3 class="text-dark">Nos campagnes de vie</h3>
                                    <!--end::Title-->
                                    <!--begin::Link-->
                                    
                                    <!--end::Link-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed mb-9"></div>
                                <!--end::Separator-->
                                <!--begin::Row-->
                                <div class="row g-10">
                                    @foreach ( $data as $key => $projet )
                                         <!--begin::Col-->
                                    <div class="col-md-6">
                                        <!--begin::Hot sales post-->
                                        <div class="card-xl-stretch mx-md-3">
                                            <!--begin::Overlay-->
                                            @foreach ($projet->projectbymedias as $image)
                                                @if ($loop->first)
                                                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{$image->path}}">
                                                        <!--begin::Image-->
                                                        
                                                            <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{$image->path}}')"></div>
                                                            
                                                        <!--end::Image-->
                                                        <!--begin::Action-->
                                                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                            <i class="bi bi-eye-fill fs-2x text-white"></i>
                                                        </div>
                                                        <!--end::Action-->
                                                    </a>
                                                @endif
                                            @endforeach
                                            <!--end::Overlay-->
                                            <!--begin::Body-->
                                            <div class="mt-5">
                                                <!--begin::Title-->
                                                <a href="#" class="fs-1 text-dark fw-bolder text-hover-primary text-dark lh-base">
                                                {{$projet->libelle}}
                                                </a>
                                                <!--end::Title-->
                                                <!--begin::Text-->
                                                <div class="fw-bold fs-5 text-gray-600 text-dark mt-3">
                                                {!!Str::words($projet->description, 15, ' ...')!!}
                                                    
                                                </div>
                                                <!--end::Text-->
                                                <!--begin::Text-->
                                                <div class="fs-6 fw-bolder mt-5 d-flex flex-stack">
                                                    <!--begin::Label-->
                                                    <span class="badge border border-dashed fs-1 fw-bolder text-dark p-2">
                                                        {{number_format($projet->budget, 0, ',', ' ')}} &nbsp;
                                                        <span class="fs-6 fw-bold text-gray-400"> F CFA</span>
                                                    </span>
                                                    <!--end::Label-->
                                                    <!--begin::Action
                                                    <a href="{{route('home.projectShow')}}" class="btn btn-sm btn-primary">En savoir plus</a>
                                                    end::Action-->
                                                    <!--begin::Action-->
                                                    <a href="{{route('project.paiement',$projet->id)}}" class="btn btn-sm btn-primary">Soutenir</a>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Hot sales post-->
                                    </div>
                                    <!--end::Col-->
                                    @endforeach
                                   
                                    
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Sidebar-->
                        <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
                            <!--begin::Search blog-->
                            {{--<div class="mb-16">
                            <!--
                                <h4 class="text-black mb-7">Search Blog</h4>
                                -->
                                <!--begin::Input group-->
                                <div class="position-relative">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <input type="text" class="form-control form-control-solid ps-10" name="search" value="" placeholder="Rechercher sur Shofar" />
                                </div>
                                <!--end::Input group-->
                            </div>--}}
                            <!--end::Search blog-->
                            {{--
                            <!--begin::Catigories-->
                            <div class="mb-16">
                                <h4 class="text-black mb-7">Categories</h4>
                                <!--begin::Item-->
                                <div class="d-flex flex-stack fw-bold fs-5 text-muted mb-4">
                                    <!--begin::Text-->
                                    <a href="#" class="text-muted text-hover-primary pe-2">SaaS Solutions</a>
                                    <!--end::Text-->
                                    <!--begin::Number-->
                                    <div class="m-0">24</div>
                                    <!--end::Number-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack fw-bold fs-5 text-muted mb-4">
                                    <!--begin::Text-->
                                    <a href="#" class="text-muted text-hover-primary pe-2">Company News</a>
                                    <!--end::Text-->
                                    <!--begin::Number-->
                                    <div class="m-0">152</div>
                                    <!--end::Number-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack fw-bold fs-5 text-muted mb-4">
                                    <!--begin::Text-->
                                    <a href="#" class="text-muted text-hover-primary pe-2">Events &amp; Activities</a>
                                    <!--end::Text-->
                                    <!--begin::Number-->
                                    <div class="m-0">52</div>
                                    <!--end::Number-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack fw-bold fs-5 text-muted mb-4">
                                    <!--begin::Text-->
                                    <a href="#" class="text-muted text-hover-primary pe-2">Support Related</a>
                                    <!--end::Text-->
                                    <!--begin::Number-->
                                    <div class="m-0">305</div>
                                    <!--end::Number-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack fw-bold fs-5 text-muted mb-4">
                                    <!--begin::Text-->
                                    <a href="#" class="text-muted text-hover-primary pe-2">Innovations</a>
                                    <!--end::Text-->
                                    <!--begin::Number-->
                                    <div class="m-0">70</div>
                                    <!--end::Number-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack fw-bold fs-5 text-muted">
                                    <!--begin::Text-->
                                    <a href="#" class="text-muted text-hover-primary pe-2">Product Updates</a>
                                    <!--end::Text-->
                                    <!--begin::Number-->
                                    <div class="m-0">585</div>
                                    <!--end::Number-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Catigories-->
                            --}}
                            <!--begin::Recent posts-->
                            <div class="m-0">
                            {{--
                                <h4 class="text-black mb-7">Publications récentes</h4>
                                <!--begin::Item-->
                                <div class="d-flex flex-stack mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-60px symbol-2by3 me-4">
                                        <div class="symbol-label" style="background-image: url('metro/assets/media/stock/600x400/img-1.jpg')"></div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="m-0">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">About Bootstrap Admin</a>
                                        <span class="text-gray-600 fw-bold d-block pt-1 fs-7">We’ve been a focused on making a the sky</span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-60px symbol-2by3 me-4">
                                        <div class="symbol-label" style="background-image: url('metro/assets/media/stock/600x400/img-2.jpg')"></div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="m-0">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">A yellow sofa</a>
                                        <span class="text-gray-600 fw-bold d-block pt-1 fs-7">We’ve been a focused on making a the sky</span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-60px symbol-2by3 me-4">
                                        <div class="symbol-label" style="background-image: url('metro/assets/media/stock/600x400/img-3.jpg')"></div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="m-0">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Our Camra Mega Set</a>
                                        <span class="text-gray-600 fw-bold d-block pt-1 fs-7">We’ve been a focused on making a the sky</span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-60px symbol-2by3 me-4">
                                        <div class="symbol-label" style="background-image: url('metro/assets/media/stock/600x400/img-4.jpg')"></div>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="m-0">
                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Time to cook and eat?</a>
                                        <span class="text-gray-600 fw-bold d-block pt-1 fs-7">We’ve been a focused on making a the sky</span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                --}}
                            </div>
                            <!--end::Recent posts-->
                        </div>
                        <!--end::Sidebar-->
                    </div>
                    <!--end::Layout-->
                    <!--begin::Section-->
                    {{--<div class="mb-17">
                        <!--begin::Content-->
                        <div class="d-flex flex-stack mb-5">
                            <!--begin::Title-->
                            <h3 class="text-dark">Médiathèque</h3>
                            <!--end::Title-->
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
                                    <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('metro/assets/media/stock/600x400/img-73.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/btornGtLwIo">
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
                                    <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('metro/assets/media/stock/600x400/img-74.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/btornGtLwIo">
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
                                    <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('metro/assets/media/stock/600x400/img-47.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/TWdDZYNqlg4">
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
                    </div>--}}
                    <!--end::Section-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Post card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->
@endsection
