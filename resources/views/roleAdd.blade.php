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
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Tables</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('roles.index')}}" class="text-muted text-hover-primary">Rôles</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-300 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Gestion des rôles & permissions</li>
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
        {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::Tables Widget 1-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Créer un nouveau rôle</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold form-label mt-3">
                                <span class="required">Libéllé</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Le libéllé est obligatoire."></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            {!! Form::text('name', null, array('class' => 'form-control form-control-solid','required' => 'required')) !!}
                            <!--end::Input-->
                            <!--begin::Separator-->
                                <div class="separator mb-6"></div>
                                <!--end::Separator-->
                            <div class="d-flex justify-content-end">
                                    <!--begin::Button-->
                                    <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">Annuler</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" class="btn btn-primary">
                                        <span class="indicator-label">Enregistrer</span>
                                        <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--endW::Tables Widget 1-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8">
                    <!--begin::Tables Widget 2-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Permisions</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <div class="fv-row">
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                                        <!--begin::Table body-->
                                        <tbody class="text-gray-600 fw-bold">
                                            <!--begin::Table row-->
                                            <tr>
                                                <td class="text-gray-800">Accès administrateur
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Allows a full access to the system"></i></td>
                                                <td>
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-9">
                                                        <input class="form-check-input" type="checkbox" value="" id="kt_roles_select_all" />
                                                        <span class="form-check-label" for="kt_roles_select_all">Tout sélectionner</span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                </td>
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">Rôles</td>
                                                <!--end::Label-->
                                                <!--begin::Input group-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        @foreach ($roles as $role)
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                {{ Form::checkbox('permission[]', $role->id, false, array('class' => 'form-check-input')) }}
                                                                <span class="form-check-label">
                                                                    @if ( $role->name=='role-list')
                                                                        Lire
                                                                    @endif
                                                                    @if ( $role->name=='role-create')
                                                                        Ecrire
                                                                    @endif

                                                                    @if ( $role->name=='role-edit')
                                                                        Modifier
                                                                    @endif
                                                                    @if ( $role->name=='role-delete')
                                                                        Supprimer
                                                                    @endif
                                                                </span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        @endforeach
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Input group-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">Utilisateurs</td>
                                                <!--end::Label-->
                                                <!--begin::Input group-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        @foreach ($users as $user)
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                {{ Form::checkbox('permission[]', $user->id, false, array('class' => 'form-check-input')) }}
                                                                <span class="form-check-label">
                                                                    @if ( $user->name=='user-list')
                                                                        Lire
                                                                    @endif
                                                                    @if ( $user->name=='user-create')
                                                                        Ecrire
                                                                    @endif

                                                                    @if ( $user->name=='user-edit')
                                                                        Modifier
                                                                    @endif
                                                                    @if ( $user->name=='user-delete')
                                                                        Supprimer
                                                                    @endif
                                                                </span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        @endforeach
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Input group-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            {{--
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">Membres</td>
                                                <!--end::Label-->
                                                <!--begin::Input group-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox" value="" name="financial_management_read" />
                                                            <span class="form-check-label">Read</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox" value="" name="financial_management_write" />
                                                            <span class="form-check-label">Write</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="" name="financial_management_create" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Input group-->
                                            </tr>
                                            --}}
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            
                                            {{--<tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">Partenaire</td>
                                                <!--end::Label-->
                                                <!--begin::Input group-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox" value="" name="financial_management_read" />
                                                            <span class="form-check-label">Read</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox" value="" name="financial_management_write" />
                                                            <span class="form-check-label">Write</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="" name="financial_management_create" />
                                                            <span class="form-check-label">Create</span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Input group-->
                                            </tr>--}}
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">Projets</td>
                                                <!--end::Label-->
                                                <!--begin::Input group-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">

                                                        @foreach ($projets as $projet)
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                {{ Form::checkbox('permission[]', $projet->id, false, array('class' => 'form-check-input')) }}
                                                                <span class="form-check-label">
                                                                    @if ( $projet->name=='projets-list')
                                                                        Lire
                                                                    @endif
                                                                    @if ( $projet->name=='projets-create')
                                                                        Ecrire
                                                                    @endif

                                                                    @if ( $projet->name=='projets-edit')
                                                                        Modifier
                                                                    @endif
                                                                    @if ( $projet->name=='projets-delete')
                                                                        Supprimer
                                                                    @endif
                                                                </span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        @endforeach

                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Input group-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">Dépenses</td>
                                                <!--end::Label-->
                                                <!--begin::Input group-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">

                                                        @foreach ($depenses as $depense)
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                {{ Form::checkbox('permission[]', $depense->id, false, array('class' => 'form-check-input')) }}
                                                                <span class="form-check-label">
                                                                    @if ( $depense->name=='depenses-list')
                                                                        Lire
                                                                    @endif
                                                                    @if ( $depense->name=='depenses-create')
                                                                        Ecrire
                                                                    @endif

                                                                    @if ( $depense->name=='depenses-edit')
                                                                        Modifier
                                                                    @endif
                                                                    @if ( $depense->name=='depenses-delete')
                                                                        Supprimer
                                                                    @endif
                                                                </span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        @endforeach

                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Input group-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">Dons</td>
                                                <!--end::Label-->
                                                <!--begin::Input group-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        @foreach ($cotisations as $cotisation)
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                {{ Form::checkbox('permission[]', $cotisation->id, false, array('class' => 'form-check-input')) }}
                                                                <span class="form-check-label">
                                                                    @if ( $cotisation->name=='cotisations-list')
                                                                        Lire
                                                                    @endif
                                                                    @if ( $cotisation->name=='cotisations-create')
                                                                        Ecrire
                                                                    @endif

                                                                    @if ( $cotisation->name=='cotisations-edit')
                                                                        Modifier
                                                                    @endif
                                                                    @if ( $cotisation->name=='cotisations-delete')
                                                                        Supprimer
                                                                    @endif
                                                                </span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        @endforeach

                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Input group-->
                                            </tr>
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">Dons en Attente</td>
                                                <!--end::Label-->
                                                <!--begin::Input group-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                    
                                                        @foreach ($cotis as $coti)
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                {{ Form::checkbox('permission[]', $coti->id, false, array('class' => 'form-check-input')) }}
                                                                <span class="form-check-label">
                                                                    @if ( $coti->name=='cotisInwait-list')
                                                                        Lire
                                                                    @endif
                                                                    @if ( $coti->name=='cotisInwait-create')
                                                                        Ecrire
                                                                    @endif

                                                                    @if ( $coti->name=='cotisInwait-edit')
                                                                        Modifier
                                                                    @endif
                                                                    @if ( $coti->name=='cotisInwait-delete')
                                                                        Supprimer
                                                                    @endif
                                                                </span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        @endforeach

                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Input group-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">Articles</td>
                                                <!--end::Label-->
                                                <!--begin::Input group-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        @foreach ($articles as $article)
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                {{ Form::checkbox('permission[]', $article->id, false, array('class' => 'form-check-input')) }}
                                                                <span class="form-check-label">
                                                                    @if ( $article->name=='post-list')
                                                                        Lire
                                                                    @endif
                                                                    @if ( $article->name=='post-create')
                                                                        Ecrire
                                                                    @endif

                                                                    @if ( $article->name=='post-edit')
                                                                        Modifier
                                                                    @endif
                                                                    @if ( $article->name=='post-delete')
                                                                        Supprimer
                                                                    @endif
                                                                </span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        @endforeach
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Input group-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">Categories</td>
                                                <!--end::Label-->
                                                <!--begin::Input group-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        
                                                        @foreach ($categories as $categorie)
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                {{ Form::checkbox('permission[]', $categorie->id, false, array('class' => 'form-check-input')) }}
                                                                <span class="form-check-label">
                                                                    @if ( $categorie->name=='category-list')
                                                                        Lire
                                                                    @endif
                                                                    @if ( $categorie->name=='category-create')
                                                                        Ecrire
                                                                    @endif

                                                                    @if ( $categorie->name=='category-edit')
                                                                        Modifier
                                                                    @endif
                                                                    @if ( $categorie->name=='category-delete')
                                                                        Supprimer
                                                                    @endif
                                                                </span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        @endforeach
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Input group-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">Médias</td>
                                                <!--end::Label-->
                                                <!--begin::Input group-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                    @foreach ($medias as $media)
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                {{ Form::checkbox('permission[]', $media->id, false, array('class' => 'form-check-input')) }}
                                                                <span class="form-check-label">
                                                                    @if ( $media->name=='medias-list')
                                                                        Lire
                                                                    @endif
                                                                    @if ( $media->name=='medias-create')
                                                                        Ecrire
                                                                    @endif

                                                                    @if ( $media->name=='medias-edit')
                                                                        Modifier
                                                                    @endif
                                                                    @if ( $media->name=='medias-delete')
                                                                        Supprimer
                                                                    @endif
                                                                </span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        @endforeach
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Input group-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">Communes</td>
                                                <!--end::Label-->
                                                <!--begin::Input group-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Wrapper-->
                                                        @foreach ($communes as $commune)
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                {{ Form::checkbox('permission[]', $commune->id, false, array('class' => 'form-check-input')) }}
                                                                <span class="form-check-label">
                                                                    @if ( $commune->name=='communes-list')
                                                                        Lire
                                                                    @endif
                                                                    @if ( $commune->name=='communes-create')
                                                                        Ecrire
                                                                    @endif

                                                                    @if ( $commune->name=='communes-edit')
                                                                        Modifier
                                                                    @endif
                                                                    @if ( $commune->name=='communes-delete')
                                                                        Supprimer
                                                                    @endif
                                                                </span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        @endforeach
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Input group-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">Regions</td>
                                                <!--end::Label-->
                                                <!--begin::Input group-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        @foreach ($regions as $region)
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                {{ Form::checkbox('permission[]', $region->id, false, array('class' => 'form-check-input')) }}
                                                                <span class="form-check-label">
                                                                    @if ( $region->name=='regions-list')
                                                                        Lire
                                                                    @endif
                                                                    @if ( $region->name=='regions-create')
                                                                        Ecrire
                                                                    @endif

                                                                    @if ( $region->name=='regions-edit')
                                                                        Modifier
                                                                    @endif
                                                                    @if ( $region->name=='regions-delete')
                                                                        Supprimer
                                                                    @endif
                                                                </span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        @endforeach
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Input group-->
                                            </tr>
                                            <!--end::Table row-->
                                            <!--begin::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">Religions</td>
                                                <!--end::Label-->
                                                <!--begin::Input group-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        @foreach ($religions as $religion)
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                {{ Form::checkbox('permission[]', $religion->id, false, array('class' => 'form-check-input')) }}
                                                                <span class="form-check-label">
                                                                    @if ( $religion->name=='religions-list')
                                                                        Lire
                                                                    @endif
                                                                    @if ( $religion->name=='religions-create')
                                                                        Ecrire
                                                                    @endif

                                                                    @if ( $religion->name=='religions-edit')
                                                                        Modifier
                                                                    @endif
                                                                    @if ( $religion->name=='religions-delete')
                                                                        Supprimer
                                                                    @endif
                                                                </span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        @endforeach
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Input group-->
                                            </tr>
                                            <!--end::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">Titre Gestion </td>
                                                <!--end::Label-->
                                                <!--begin::Input group-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        @foreach ($libellegest as $libellegest)
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                {{ Form::checkbox('permission[]', $libellegest->id, false, array('class' => 'form-check-input')) }}
                                                                <span class="form-check-label">
                                                                    @if ( $libellegest->name=='GestCompteTitle-list')
                                                                        Comptes
                                                                    @endif
                                                                    @if ( $libellegest->name=='GestProjetTitle-list')
                                                                        Projets
                                                                    @endif

                                                                    @if ( $libellegest->name=='GestArticleTitle-list')
                                                                        Articles
                                                                    @endif
                                                                </span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        @endforeach
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Input group-->
                                            </tr>
                                            <!--end::Table row-->

                                            <!--end::Table row-->
                                            <tr>
                                                <!--begin::Label-->
                                                <td class="text-gray-800">Libéllé </td>
                                                <!--end::Label-->
                                                <!--begin::Input group-->
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            {{ Form::checkbox('permission[]', $libellenreg->id, false, array('class' => 'form-check-input')) }}
                                                            <span class="form-check-label">
                                                                @if ( $libellenreg->name=='EnregistrementTitle-list')
                                                                    Enregist.
                                                                @endif
                                                            </span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            {{ Form::checkbox('permission[]', $libellepublications->id, false, array('class' => 'form-check-input')) }}
                                                            <span class="form-check-label">
                                                                @if ( $libellepublications->name=='PublicationsTitle-list')
                                                                Publications
                                                                @endif
                                                            </span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            {{ Form::checkbox('permission[]', $libelleparametre->id, false, array('class' => 'form-check-input')) }}
                                                            <span class="form-check-label">
                                                                @if ( $libelleparametre->name=='ParamètreTitle-list')
                                                                    Paramètres
                                                                @endif
                                                            </span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            {{ Form::checkbox('permission[]', $libellediteur->id, false, array('class' => 'form-check-input')) }}
                                                            <span class="form-check-label">
                                                                @if ( $libellediteur->name=='editeur-read')
                                                                    Editeur
                                                                @endif
                                                            </span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <!--end::Input group-->
                                            </tr>
                                            <!--end::Table row-->
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Tables Widget 2-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        {!! Form::close() !!}
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->
@endsection