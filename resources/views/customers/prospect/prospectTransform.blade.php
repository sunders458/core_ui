@extends('layouts.app')
@section('content')
<!-- Main Content Wrapper -->
<main class="main-content w-full px-[var(--margin-x)] pb-8">
    <div
      class="flex flex-col items-center justify-between space-y-4 py-5 sm:flex-row sm:space-y-0 lg:py-6"
    >
      <div class="flex items-center space-x-1">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-6 w-6"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
          />
        </svg>
        <h2
          class="text-xl font-medium text-slate-700 line-clamp-1 dark:text-navy-50"
        >
        Formulaire de modification
        </h2>
      </div>
    </div>
    <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
      <div class="col-span-12 lg:col-span-8">
        <div class="card">
          <div class="tabs flex flex-col">
            <div class="tab-content p-4 sm:p-5">
              <div class="space-y-5">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                  <label class="block">
                    <span>Nom</span>
                    <span class="relative mt-1.5 flex">
                      {!! Form::text('name',$prospect->name,['placeholder'=>'Entrez le nom','class'=>'form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent']) !!}
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
                      {!! Form::text('firstname',null,['placeholder'=>'Entrez les prenoms','class'=>'form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent']) !!}
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
                    
                    {!! Form::text('nationality',null,['placeholder'=>'Entrez la nationalité','class'=>'form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent']) !!}
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
                    {!! Form::text('matricule',null,['placeholder'=>'Entrez le numero de la pièce','class'=>'form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent']) !!}
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
                      @foreach ($countries as $key => $country)
                         <option value="{{$key}}" {{ ( $key == $selectedPays) ? 'selected' : '' }}>{{$country}}</option>
                      @endforeach
                    </select> 
                  </span>
                </label>
              </div>
              <div class="grid grid-cols-1 gap-4 sm:grid-cols-12">
                <label class="block sm:col-span-4">
                  <span>Date de naissance</span>
                  <span class="relative mt-1.5 flex">
                      
                      {!! Form::text('birthday',null,['x-init'=>'$el._x_flatpickr = flatpickr($el)','placeholder'=>'Entrez le numero de la pièce','class'=>'form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent']) !!}
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
                   
                    {!! Form::text('birthlocation',null,['placeholder'=>'Entrer le lieu de naissance','class'=>'form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent']) !!}
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
                    {!! Form::text('grade',null,['placeholder'=>'Entrez la fonction','class'=>'form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent']) !!}
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
                    

                    {!! Form::text('conjoint',null,['class'=>'form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent']) !!}
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
                    
                    {!! Form::text('email',null,['placeholder'=>'addresse Email','class'=>'form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent']) !!}
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
                          placeholder="99-9999-9999"
                          type="text"
                          x-input-mask="{numericOnly: true, blocks: [0, 3, 2, 4, 4], delimiters: ['(', ') ', '-']}"
                          name="phone"
                        /> 

                        {{-- {!! Form::text('phone',null,['x-input-mask'=>'{numericOnly: true, blocks: [0, 3, 2, 4, 4], delimiters: ['(', ') ', '-']}','placeholder'=>'99-9999-9999','class'=>'form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent']) !!} --}}
                        <span
                          class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                        >
                          <i class="fa fa-phone"></i>
                        </span>
                      </span>
                </label>
              </div>
              
              <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <label class="block">
                  <span>Communes</span>
                  <span class="relative mt-1.5 flex">
                    
                    {!! Form::text('city',null,['placeholder'=>'Ville/Commune','class'=>'form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent']) !!}
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
                    
                    {!! Form::text('residence',null,['placeholder'=>'residence','class'=>'form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent']) !!}
                    <span
                      class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                    >
                      <i class="fa-solid fa-flag"></i>
                    </span>
                  </span>
                </label>
              </div>
              <div class="flex justify-end space-x-2">
                
                <div x-data="{showModal:false}">
                  <a
                    @click="showModal = true"
                    class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                  >
                    Souscrire
                  </a>
                  <template x-teleport="#x-teleport-target">
                    <div
                      class="fixed inset-0 z-[100] flex flex-col items-center justify-center overflow-hidden px-4 py-6 sm:px-5"
                      x-show="showModal"
                      role="dialog"
                      @keydown.window.escape="showModal = false"
                    >
                      <div
                        class="absolute inset-0 bg-slate-900/60 transition-opacity duration-300"
                        @click="showModal = false"
                        x-show="showModal"
                        x-transition:enter="ease-out"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="ease-in"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                      ></div>
                      <div
                        class="relative w-full max-w-lg origin-top rounded-lg bg-white transition-all duration-300 dark:bg-navy-700"
                        x-show="showModal"
                        x-transition:enter="easy-out"
                        x-transition:enter-start="opacity-0 scale-95"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="easy-in"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                      >
                        <div
                          class="flex justify-between rounded-t-lg bg-slate-200 px-4 py-3 dark:bg-navy-800 sm:px-5"
                        >
                          <h3
                            class="text-base font-medium text-slate-700 dark:text-navy-100"
                          >
                            Formulaire de souscription
                          </h3>
                          <button
                            @click="showModal = !showModal"
                            class="btn -mr-1.5 h-7 w-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="h-4.5 w-4.5"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                              stroke-width="2"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12"
                              />
                            </svg>
                          </button>
                        </div>
                        <div class="px-4 py-4 sm:px-5">
                         
                          <div class="mt-4 space-y-4">
                            {!! Form::open(array('route' => 'prospects.souscript','method'=>'POST')) !!}
                            @foreach ($prospect->bien as $elmts)     
                                <label class="block">
                                <span>Montant Souscription:</span>
                                <input
                                    class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    placeholder="Entrer le montant"
                                    type="text"
                                    value="500 000"
                                    name="souscription[]"
                                />
                                <input
                                  class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                  type="hidden"
                                  value="{{$elmts->id}}"
                                  name="projet[]"
                                />
                                <input
                                  class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                  type="hidden"
                                  value="{{$prospect->id}}"
                                  name="user_id"
                                />
                                </label>
                            
                                <label class="block">
                                    <span>Cotisation:</span>
                                    <input
                                        class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                        placeholder="Entrer le montant"
                                        type="text"
                                        name="cotisation[]"
                                    />
                                </label>
                                <label class="block">
                                    <span>Description:</span>
                                    <textarea
                                    rows="3"
                                    {{-- placeholder=" Enter Text" --}}
                                    class="form-textarea mt-1.5 w-full resize-none rounded-lg border border-slate-300 bg-transparent p-2.5 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                                    name="description[]"
                                    ></textarea>
                                </label>
                                <div class="my-3 mx-4 h-px bg-slate-200 dark:bg-navy-500"></div>
                            @endforeach
                            <div class="space-x-2 text-right">
                              <button
                                @click="showModal = false"
                                class="btn min-w-[7rem] rounded-full border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90"
                              >
                                Annulez
                              </button>
                              <button
                                class="btn min-w-[7rem] rounded-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                                type="submit"
                              >
                                Validez
                              </button>
                              {!! Form::close() !!}
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </template>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-12 lg:col-span-4">

        <div class="card space-y-5 p-4 sm:p-5">

          <p>Interessé par </p>
          
          @foreach ($interrest as $lgmt)
            <div
              class="flex cursor-pointer flex-col rounded-t-lg border-b p-2.5 font-semibold text-slate-700 hover:bg-slate-100 dark:border-navy-500 dark:text-navy-100 dark:hover:bg-navy-600 sm:flex-row sm:items-center"
            >
              <div class="flex items-center justify-between">
                <div class="flex space-x-2 sm:w-72">
                  <div class="flex space-x-3">
                    <label
                      class="flex h-8 w-8 items-center justify-center"
                      x-tooltip="'Selectionnez'"
                    >
                      {{ Form::checkbox('bien_id[]', $lgmt->id, in_array($lgmt->id, $myinterrest) ? true : false, array('readonly','class'=>'form-checkbox is-outline h-4.5 w-4.5 rounded border-slate-400/70 before:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:before:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent')) }}
                    </label>

                    <div class="flex items-center space-x-4">
                      <div class="avatar h-9 w-9">
                        <img
                          class="mask is-squircle"
                          src="{{ $lgmt->illustration}}"
                          alt="avatar"
                        />
                      </div>
                    </div>


                    <div>
                      <a 
                        href="apps-filemanager.html#" 
                        class="text-slate-600 dark:text-navy-100"
                      >
                        {{ $lgmt->ilot}}   
                      </a
                      >
                      <span class="items-rigth">
                        {{ $lgmt->finition}}
                      </span>
                      <div
                        class="mt-1 flex text-xs text-slate-400 dark:text-navy-300"
                      >
                        <p>{{$lgmt->type_logement}}</p>
                        <div
                          class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500"
                        ></div>
                        <p>{{number_format($lgmt->prix, 0, ',', ' ')}} F CFA </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <br>
      </div>
    </div>
  </main>
@endsection