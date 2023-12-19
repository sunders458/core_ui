@extends('layouts.app')

@section('content')
<!-- Main Content Wrapper -->
<!-- Main Content Wrapper -->
<main class="main-content w-full px-[var(--margin-x)] pb-8">
    <div class="flex items-center space-x-4 py-5 lg:py-6">
      <h2
        class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl"
      >
        Formulaire d'ajout clients
      </h2> 
    </div>
    <div class="grid grid-cols-8 gap-4 sm:gap-5 lg:gap-6">
      <div class="col-span-8">
        {!! Form::open(array('route' => 'clients.store','method'=>'POST')) !!}

        <div class="card p-4 sm:p-5">
          <p
            class="text-base font-medium text-slate-700 dark:text-navy-100"
          >
            Nouveau
          </p>

          <div class="mt-4 space-y-4">
            <!--
            <label class="block">
              <span>Company name</span>
              <span class="relative mt-1.5 flex">
                <input
                  class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                  placeholder="Your Company"
                  type="text"
                />
                <span
                  class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                >
                  <i class="fa-regular fa-building text-base"></i>
                </span>
              </span>
            </label>
            Name input -->
            
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <label class="block">
                  <span>Nom</span>
                  <span class="relative mt-1.5 flex">
                    <input
                      class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="Entrez le nom"
                      type="text"
                      name="name"
                    />
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                    >
                      <i class="far fa-user text-base"></i>
                    </span>
                  </span>
                </label>
                <label class="block">
                  <span>Prenoms</span>
                  <span class="relative mt-1.5 flex">
                    <input
                      class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                      placeholder="Entrez les prenoms"
                      type="text"
                      name="firstname"
                    />
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                    >
                    <i class="far fa-user text-base"></i>
                    </span>
                  </span>
                </label>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
              <label class="block">
                <span>Nationalité</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Entrez la nationalité"
                    type="text"
                    name="nationality"
                  />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                  >
                    <i class="far fa-user text-base"></i>
                  </span>
                </span>
              </label>
              <label class="block">
                <span>N° CNI </span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Enttrez le numero de la pièce"
                    type="text"
                    name="matricule"
                  />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                  >
                  <i class="far fa-user text-base"></i>
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Pays de résidence</span>
                <span class="relative mt-1.5 flex">
                  <select
                    x-init="$el._tom = new Tom($el)"
                    class="w-full"
                    placeholder="Pays de résidence..."
                    autocomplete="off"
                    name="pays_id"
                  >
                    <option value="" selected>Selectinez votre pays...</option>
                    @foreach ($countries as $country)
                       <option value="{{$country->id}}">{{$country->libelle}}</option>
                    @endforeach
                  </select>

                </span>
              </label>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-12">
              <label class="block sm:col-span-4">
                <span>Date de naissance</span>
                <span class="relative mt-1.5 flex">
                    <input
                    x-init="$el._x_flatpickr = flatpickr($el)"
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Choose date..."
                    type="text"
                    name="birthday"
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
                        stroke-width="1.5"
                    >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                        />
                    </svg>
                    </span>

                </span>
                    
              </label>
              <label class="block sm:col-span-8">
                <span>Lieux de naissance</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Entrer le lieu de naissance"
                    type="text"
                    name="birthlocation"
                  />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                  >
                    <i class="fa fa-location-arrow"></i>
                  </span>
                </span>
              </label>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-12">
              <label class="block sm:col-span-4">
                <span>Fonction</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Entrez la fonction"
                    type="text"
                    name="grade"
                  />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                  >
                    <i class="far fa-user text-base"></i>
                  </span>
                </span>
              </label>
             
              <label class="block sm:col-span-2">

                <span>Situation Matri..</span>
                <span class="relative mt-1.5 flex">
                  <select
                  x-init="$el._tom = new Tom($el)"
                    class="w-full"
                    name="matrimoniale"
                  >
                    <option value="">Choisir...</option>
                    <option value="0">Célibataire</option>
                    <option value="1">Marié</option>
                  </select>
                </span>


              </label>
              <label class="block sm:col-span-6">
                <span>Conjoint </span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Enttrez le nom et le prenoms de conjoint"
                    type="text"
                    name="conjoint"
                  />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                  >
                  <i class="far fa-user text-base"></i>
                  </span>
                </span>
              </label>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-12">
              <label class="block sm:col-span-8">
                <span>Adresse Email</span>
                <div class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="addresse Email "
                    type="text"
                    name="email"
                  />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                  >
                    <i class="fa-regular fa-envelope text-base"></i>
                  </span>
                </div>
              </label>
              <label class="block sm:col-span-4">
                <span>Numero de téléphone</span>
                    <span class="relative mt-1.5 flex">
                      <input
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="(225) 99-9999-9999"
                        type="text"
                        x-input-mask="{numericOnly: true, blocks: [0, 3, 2, 4, 4], delimiters: ['(', ') ', '-']}"
                        name="phone"
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                      >
                        <i class="fa fa-phone"></i>
                      </span>
                    </span>
              </label>
            </div>
            {{-- <label class="block">
              <span>Address</span>
              <textarea
                rows="4"
                placeholder="Your Address (Area and Street)"
                class="form-textarea mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
              ></textarea>
            </label> --}}
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
              <label class="block">
                <span>Communes</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Ville/Commune"
                    type="text"
                    name="city"
                  />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                  >
                    <i class="fa-solid fa-city text-base"></i>
                  </span>
                </span>
              </label>
              <label class="block">
                <span>Quartier</span>
                <span class="relative mt-1.5 flex">
                  <input
                    class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="residence"
                    type="text"
                    name="residence"
                  />
                  <span
                    class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                  >
                    <i class="fa-solid fa-flag"></i>
                  </span>
                </span>
              </label>
            </div>
            {{-- <div x-data="{sameBillingAddress:true}">
              <div
                class="flex-wrap items-start space-y-2 pt-2 sm:flex sm:space-y-0 sm:space-x-5"
              >
                <label class="inline-flex items-center space-x-2">
                  <input
                    x-model="sameBillingAddress"
                    class="form-checkbox is-basic h-5 w-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                    type="checkbox"
                  />
                  <span>Same is Billing Address</span>
                </label>
                <div>
                  <button
                    @click="sameBillingAddress = false"
                    class="border-b border-dotted border-current pb-0.5 font-medium text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70"
                  >
                    Add Billing Address
                  </button>
                </div>
              </div>
              <div x-show="!sameBillingAddress" x-collapse>
                <label class="block pt-4">
                  <span>Billing Address</span>
                  <textarea
                    rows="4"
                    placeholder="Enter billing address"
                    class="form-textarea mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                  ></textarea>
                </label>
              </div>
            </div> --}}
            <div class="flex justify-end space-x-2">
              <button
                class="btn space-x-2 bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    fill-rule="evenodd"
                    d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                    clip-rule="evenodd"
                  />
                </svg>
                <span>Annuler</span>
              </button>
              <button
                class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                type="submit"
              >
                <span>Enregistrer</span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    fill-rule="evenodd"
                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>
        {!! Form::close() !!}

      </div>
    </div>
  </main>

@endsection
