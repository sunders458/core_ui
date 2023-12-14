@extends('layouts.auth')

@section('contenu')
<div class="d-flex flex-center flex-column flex-column-fluid">
    <!--begin::Wrapper-->
    <div class="w-lg-600px p-10 p-lg-15 mx-auto">
        <!--begin::Form-->
        <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" method="POST" action="{{ route('register') }}">
        @csrf
            <!--begin::Heading-->
            <div class="mb-10 text-center">
                <!--begin::Title-->
                <h1 class="text-dark mb-3">Créer un compte</h1>
                <!--end::Title-->
                <!--begin::Link-->
                <div class="text-gray-400 fw-bold fs-4">Vous avez déjà un compte?
                <a href="/" class="link-primary fw-bolder">Se connecter ici</a></div>
                <!--end::Link-->
            </div>
            <!--end::Heading-->
            <!--begin::Action
            <button type="button" class="btn btn-light-primary fw-bolder w-100 mb-10">
            <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Sign in with Google</button>
            end::Action-->
            <!--begin::Separator
            <div class="d-flex align-items-center mb-10">
                <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                <span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
                <div class="border-bottom border-gray-300 mw-50 w-100"></div>
            </div>
            end::Separator-->
            <!--begin::Input group-->
            <div class="row fv-row mb-7">
                <!--begin::Col-->
                <div class="col-xl-12">
                    <label class="form-label fw-bolder text-dark fs-6">Nom  & Prenom (Raison social)</label> <span style="color:red">*</span>
                    <input id="name" class="form-control form-control-lg form-control-solid @error('name') is-invalid @enderror" type="text" placeholder="" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!--end::Col-->
                {{--<!--begin::Col-->
                <div class="col-xl-6">
                    <label class="form-label fw-bolder text-dark fs-6">Prenoms</label> 
                    <input id="firstname" class="form-control form-control-lg form-control-solid @error('firstname') is-invalid @enderror" type="text" placeholder="" name="firstname" value="{{ old('firstname') }}" autocomplete="firstname" autofocus />
                    @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!--end::Col-->--}}
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Email</label>
                <input id="email" class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror" type="email" placeholder="" name="email" value="{{ old('email') }}" autocomplete="email" />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-7">

                <label class="form-label fw-bolder text-dark fs-6">Téléphone</label>
                <!--begin::Hint-->
                <div class="text-muted">
                    Ce numéro servira à vous connecter.
                </div>
                <!--end::Hint-->
                <input id="phone" class="form-control form-control-lg form-control-solid" type="tel" placeholder="" name="phone" value="{{ old('phone') }}" autocomplete="phone" />
                
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="mb-10 fv-row" data-kt-password-meter="true">
                <!--begin::Wrapper-->
                <div class="mb-1">
                    <!--begin::Label-->
                    <label class="form-label fw-bolder text-dark fs-6">Mot de passe</label>
                    <!--end::Label-->
                    <!--begin::Input wrapper-->
                    <div class="position-relative mb-3">
                        <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password" autocomplete="off" />
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                            <i class="bi bi-eye-slash fs-2"></i>
                            <i class="bi bi-eye fs-2 d-none"></i>
                        </span>
                    </div>
                    <!--end::Input wrapper-->
                    <!--begin::Meter
                    <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                    </div>
                    end::Meter-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Hint-->
                <div class="text-muted">
                    Utilisez 6 caractères ou plus.
                </div>
                <!--end::Hint-->
            </div>
            <!--end::Input group=-->
            <!--begin::Input group-->
            <div class="fv-row mb-5">
                <label class="form-label fw-bolder text-dark fs-6">Confirmez le mot de passe</label> 
                <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password_confirmation" required autocomplete="new-password" />
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
                <label class="form-check form-check-custom form-check-solid form-check-inline">
                    <input class="form-check-input" type="checkbox" name="toc" value="1" />
                    <span class="form-check-label fw-bold text-gray-700 fs-6">Je suis d'accord
                    <a href="#" class="ms-1 link-primary">Termes et conditions</a>.</span>
                </label>
            </div>
            <!--end::Input group-->
            <!--begin::Actions-->
            <div class="text-center">
                <button type="submit" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
                    <span class="indicator-label">S'inscrire</span>
                    <span class="indicator-progress">Patientez svp...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Wrapper-->
</div>
@endsection
