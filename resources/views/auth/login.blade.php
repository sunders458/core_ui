@extends('layouts.auth')

@section('auth_content')
<main class="grid w-full grow grid-cols-1 place-items-center">
    <div class="w-full max-w-[26rem] p-4 sm:px-5">
    <div class="text-center">
        <img
        class="mx-auto h-20 w-26"
        src="{{asset('core_ui/images/logos/logo_immo-2.png')}}"
        alt="logo"
        />
        <div class="mt-4">
        <h2
            class="text-2xl font-semibold text-slate-600 dark:text-navy-100"
        >
        Content de vous revoir
        </h2>
        <p class="text-slate-400 dark:text-navy-300">
            Veuillez vous connecter pour continuer
        </p>
        </div>
    </div>
    <div class="card mt-5 rounded-lg p-5 lg:p-7">

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label class="block">
            <span>Email :</span>
            <span class="relative mt-1.5 flex">
                <input
                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent @error('phone') is-invalid @enderror"
                placeholder="Enter Username"
                type="email"
                value="{{ old('phone') }}" required autocomplete="email" autofocus
                name="phone"
                />
                <span
                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 transition-colors duration-200"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                    />
                </svg>
                </span>
            </span>
            <br>
            @error('email')
                <span class="alert flex space-x-2 rounded-lg border border-error px-4 py-4 text-error" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </label>

            <label class="mt-4 block">
            <span>Mot de passe :</span>
            <span class="relative mt-1.5 flex">
                <input
                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent @error('password') is-invalid @enderror"
                placeholder="Entrer votre mot de passe"
                type="password"
                name="password" required autocomplete="current-password"
                />
                <span
                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 transition-colors duration-200"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                    />
                </svg>
                </span>
                <br>
            </span>
            <br>
            @error('password')
                <span class="alert flex space-x-2 rounded-lg border border-error px-4 py-4 text-error" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </label>
            <div class="mt-4 flex items-center justify-between space-x-2">
            <label class="inline-flex items-center space-x-2">
                <input
                class="form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                type="checkbox"
                />
                <span class="line-clamp-1">Se souvenir de moi</span>
            </label>
            <a
                href="pages-login-1.html#"
                class="text-xs text-slate-400 transition-colors line-clamp-1 hover:text-slate-800 focus:text-slate-800 dark:text-navy-300 dark:hover:text-navy-100 dark:focus:text-navy-100"
                >Mot de passe oublié?</a
            >
            </div>
            <button
            class="btn mt-5 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
            type="submit"
            >
            Se connecter
            </button>
            <div class="mt-4 text-center text-xs+">
            <p class="line-clamp-1">
                <span>Vous n'avez pas de compte ?</span>

                <a
                class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                href="pages-singup-1.html"
                >Faire une demande</a
                >
            </p>
            </div>

        </form>
    </div>

        <div
            class="mt-8 flex justify-center text-xs text-slate-400 dark:text-navy-300"
        >
            <a href="pages-login-1.html#">Privacy Notice</a>
            <div class="mx-3 my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
            <a href="pages-login-1.html#">Term of service</a>
        </div>
    </div>
</main>
@endsection
