@extends('layouts.app')
@section('contenu')
<style>
#show_hide {
    display: none;
}
</style>
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="/home" class="text-muted text-hover-primary">Accueil</a>
                        </li>
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
                            <h3 class="text-dark mb-7">{{$projet->libelle}} &nbsp; {{number_format($projet->budget, 0, ',', ' ')}} F CFA</h3>
                            <!--end::Title-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed mb-9"></div>
                            <!--end::Separator-->
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-md-6">
                                    <!--begin::Feature post-->
                                    <div class="h-10 d-flex flex-column justify-content-between pe-lg-6 mb-lg-0 mb-10">
                                        <!--begin::Video
                                        <div class="mb-3">
                                            <iframe class="embed-responsive-item card-rounded h-275px w-100" src="https://www.youtube.com/embed/TWdDZYNqlg4" allowfullscreen="allowfullscreen"></iframe>
                                        </div>
                                        end::Video-->
                                        <!--begin::Video-->
                                        @foreach ($projet->projectbymedias as $image)
                                            @if ($loop->first)
                                                <div class="mb-3">
                                                    <img class="embed-responsive-item card-rounded h-275px w-100" src="{{url($image->path)}}">
                                                </div>
                                            @endif
                                        @endforeach
                                        <!--end::Video-->
                                        <!--begin::Body-->
                                        <div class="mb-5">
                                            <div class="fw-bold fs-5 text-gray-600 text-dark mt-4">
                                            {!!$projet->description!!}
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
                                <!--begin::Alert-->
                                {{--<div class="alert alert-warning">
                                    <!--begin::Icon-->
                                    <span class="svg-icon svg-icon-2hx svg-icon-primary me-3">...</span>
                                    <!--end::Icon-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Title-->
                                        <h4 class="mb-1 text-dark">Avertissement</h4>
                                        <!--end::Title-->
                                        <!--begin::Content-->
                                        <span>The alert component can be used to highlight certain parts of your page for higher content visibility.</span>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                --}}
                                <!--end::Alert-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed mb-9"></div>
                                <!--end::Separator-->
                                <!--end::Post-->
                                <!--begin::Post-->
                                <div class="ps-lg-6 mb-16">
                                    <!--begin::Body-->
                                    <div class="mb-6">
                                        <!--begin::Title-->
                                        <a href="#" class="fw-bolder text-dark mb-4 fs-2 lh-base text-hover-primary">Montants</a>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="fw-bold fs-5 mt-4 text-gray-600 text-dark">
                                            Veuillez cocher pour choisir votre montant et cliquer sur envoyer pour valider votre choix.
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Footer-->
                                    <div class="d-flex flex-stack flex-wrap">
                                        <!--begin::Item-->
                                        {!! Form::open(array('id'=>'kt_project_settings_form', 'class'=>'form', 'route' => 'project.paiement.store','method'=>'POST')) !!}
                                        <div id="show_hide">
                                            
                                            <!--begin::Option-->
                                            <span class="badge border border-dashed fs-4 fw-bolder text-dark p-2">
                                                <label class="form-check form-check-inline form-check-solid me-5">Autre</label>
                                                    {{ Form::number('montant', null, false, array('class'=>'form-check-input','min'=>'5000')) }}
                                                    &nbsp;
                                                    <span class="fs-6 fw-bold text-gray-400"> F CFA</span>
                                            </span>
                                            <!--end::Option-->&nbsp;&nbsp;
                                        </div>
                                        @error('montant')
                                            <span style="color:red">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div class="d-flex align-items-center mt-3">
                                            <!--begin::Option-->
                                            <span class="badge border border-dashed fs-4 fw-bolder text-dark p-2">
                                                <label class="form-check form-check-inline form-check-solid me-5">
                                                    {{ Form::radio('montant', 5000, false, ['class'=>'form-check-input','min'=>'5000']) }}
                                                    5 000 &nbsp;
                                                    <span class="fs-6 fw-bold text-gray-400"> F CFA</span>
                                                </label>
                                            </span>
                                            <!--end::Option-->&nbsp;&nbsp;
                                            <!--begin::Option-->
                                            <span class="badge border border-dashed fs-4 fw-bolder text-dark p-2">
                                                <label class="form-check form-check-inline form-check-solid me-5">
                                                    {{ Form::radio('montant', 10000, false, ['class'=>'form-check-input','min'=>'5000']) }}
                                                    10 000 &nbsp;
                                                    <span class="fs-6 fw-bold text-gray-400"> F CFA</span>
                                                </label>
                                            </span>
                                            <!--end::Option--> &nbsp;&nbsp;
                                            <!--begin::Option-->
                                            <span class="badge border border-dashed fs-4 fw-bolder text-dark p-2">
                                                <label class="form-check form-check-inline form-check-solid me-5">
                                                    {{ Form::radio('montant', 15000, false, ['class'=>'form-check-input','min'=>'5000']) }}
                                                    15 000 &nbsp;
                                                    <span class="fs-6 fw-bold text-gray-400"> F CFA</span>
                                                </label>
                                            </span>
                                            <!--end::Option-->
                                        </div>
                                        <div class="d-flex align-items-center mt-3">
                                            
                                            <!--begin::Option-->
                                            <span class="badge border border-dashed fs-4 fw-bolder text-dark p-2">
                                                <label class="form-check form-check-inline form-check-solid me-5">
                                                    {{ Form::radio('montant', 20000, false, ['class'=>'form-check-input','min'=>'5000']) }}
                                                    20 000 &nbsp;
                                                    <span class="fs-6 fw-bold text-gray-400"> F CFA</span>
                                                </label>
                                                
                                            </span>
                                            <!--end::Option-->&nbsp;&nbsp;
                                            <!--begin::Option-->
                                            <span class="badge border border-dashed fs-4 fw-bolder text-dark p-2">
                                                <label class="form-check form-check-inline form-check-solid me-5">
                                                    {{ Form::radio('montant', 25000, false, ['class'=>'form-check-input','min'=>'5000']) }}
                                                    25 000 &nbsp;
                                                    <span class="fs-6 fw-bold text-gray-400"> F CFA</span>
                                                </label>
                                            </span>
                                            <!--end::Option--> &nbsp;&nbsp;
                                            <!--begin::Option-->
                                            <span class="badge border border-dashed fs-4 fw-bolder text-dark p-2">
                                                <label class="form-check form-check-inline form-check-solid me-5">
                                                    {{ Form::radio('montant', 30000, false, ['class'=>'form-check-input','min'=>'5000']) }}
                                                    30 000 &nbsp;
                                                    <span class="fs-6 fw-bold text-gray-400"> F CFA</span>
                                                </label>
                                            </span>
                                            <!--end::Option-->
                                            <!--end::Option-->
                                            {{ Form::hidden('projet_id', $projet->id, false, ['class'=>'form-check-input']) }}
                                            {{ Form::hidden('user_id', Auth::user()->id, false, ['class'=>'form-check-input']) }}
                                        </div>
                                        <div class="d-flex align-items-center mt-3">
                                            <!--begin::Option-->
                                            <span class="badge border border-dashed fs-4 fw-bolder text-dark p-2">
                                                <label class="form-check form-check-inline form-check-solid me-5">
                                                    
                                                    <input 
                                                        type="radio" 
                                                        name="" 
                                                        id="" 
                                                        class="form-check-input" 
                                                        onfocus="document.getElementById('show_hide').style.display='block';"
                                                    >
                                                    Autre &nbsp;
                                                    
                                                </label>
                                            </span>
                                            <!--end::Option-->&nbsp;&nbsp;
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
                            </div>
                                <!--end::Col-->
                            </div>
                            <!--begin::Row-->
                        </div>
                        <!--end::Section-->
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
                    <script>
function myFunction() {
  var x = document.getElementById("myDIV");

  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
@endsection