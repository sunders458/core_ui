@extends('layouts.auth')

@section('contenu')
<div class="d-flex flex-center flex-column flex-column-fluid">
    <!--begin::Wrapper-->
    <div class="w-lg-500px p-10 p-lg-15 mx-auto">
        <!--begin::Form-->
        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="/" method="POST" action="{{ route('login') }}">
            @csrf
            <!--begin::Heading-->
            <div class="text-center mb-10">
                <!--begin::Title-->
                <h1 class="text-dark mb-3">Connectez-vous à votre espace partenaire</h1>
                <!--end::Title-->
                <!--begin::Link-->
                <div class="text-gray-400 fw-bold fs-4">Nouveau ici?
                <a href="/register" class="link-primary fw-bolder">Créer un compte</a></div>
                <!--end::Link-->
            </div>
            <!--begin::Heading-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
                <!--begin::Label-->
                <label class="form-label fs-6 fw-bolder text-dark">Téléphone ou Email</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input id="phone" class="form-control form-control-lg form-control-solid @error('phone') is-invalid @enderror" type="phone" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus />
                <!--end::Input-->
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="fv-row mb-10">
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack mb-2">
                    <!--begin::Label-->
                    <label class="form-label fw-bolder text-dark fs-6 mb-0">Mot de passe </label>
                    <!--end::Label-->
                    <!--begin::Link
                    <a href="../../demo1/dist/authentication/layouts/aside/password-reset.html" class="link-primary fs-6 fw-bolder">Mot de passe oublié ?</a>
                    end::Link-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Input-->
                <input id="password" class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" />
                <!--end::Input-->
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!--end::Input group-->
            <!--begin::Actions-->
            <div class="text-center">
                <!--begin::Submit button-->
                <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                    <span class="indicator-label">Connexion</span>
                    <span class="indicator-progress">Patientez svp...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <!--end::Submit button-->
                <!--begin::Separator
                <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
                end::Separator-->
                <!--begin::Google link
                <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Continue with Google</a>
                end::Google link-->
                <!--begin::Google link
                <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                <img alt="Logo" src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-3" />Continue with Facebook</a>
                end::Google link-->
                <!--begin::Google lin
                <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
                <img alt="Logo" src="assets/media/svg/brand-logos/apple-black.svg" class="h-20px me-3" />Continue with Apple</a>
                end::Google link-->
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Wrapper-->
</div>

@endsection
