@extends('layouts.app')
@section('content')
<!-- Main Content Wrapper -->
<main class="main-content w-full px-[var(--margin-x)] pb-8">
  {!! Form::open(array('route' => 'logements.store','files' => true,'method'=>'POST')) !!}
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
          Nouveau logement
        </h2>
      </div>
      <div class="flex justify-center space-x-2">
        <button
          class="btn min-w-[7rem] border border-slate-300 font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90"
          type="reset"
        >
          Annuler
        </button>
        <button
          class="btn min-w-[7rem] bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
          type="submit"
        >
          Enregistrer
        </button>
      </div>
    </div>
    <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
      <div class="col-span-12 lg:col-span-8">

        <div class="card">
          <div class="tabs flex flex-col">

            {{-- <div class="is-scrollbar-hidden overflow-x-auto">
              <div class="border-b-2 border-slate-150 dark:border-navy-500">
                <div class="tabs-list -mb-0.5 flex">
                  <button
                    class="btn h-14 shrink-0 space-x-2 rounded-none border-b-2 border-primary px-4 font-medium text-primary dark:border-accent dark:text-accent-light sm:px-5"
                  >
                    <i class="fa-solid fa-layer-group text-base"></i>
                    <span>General</span>
                  </button>
                  <button
                    class="btn h-14 shrink-0 space-x-2 rounded-none border-b-2 border-transparent px-4 font-medium hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100 sm:px-5"
                  >
                    <i class="fa-solid fa-tags text-base"></i>
                    <span>Meta Tags</span>
                  </button>
                  <button
                    class="btn h-14 shrink-0 space-x-2 rounded-none border-b-2 border-transparent px-4 font-medium hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100 sm:px-5"
                  >
                    <i class="fa-solid fa-bars-staggered text-base"></i>
                    <span> Keywords </span>
                  </button>
                </div>
              </div>
            </div> --}}

            <div class="tab-content p-4 sm:p-5">
              <div class="space-y-5">
                <label class="block">
                  <span
                    class="font-medium text-slate-600 dark:text-navy-100"
                    >Lot et Ilot</span
                  >
                  <input
                    class="form-input mt-1.5 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                    placeholder="Entrer le lot et Ilot"
                    type="text"
                    name="ilot"
                  />
                </label>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                  <label class="block">
                    <span>Superficie</span>
                    <span class="relative mt-1.5 flex">
                      <input
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Entrez la superficie"
                        type="number"
                        name="superficie"
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                      >
                        <i class="far fa-clone text-base"></i>
                      </span>
                    </span>
                  </label>
                  <label class="block">
                    <span>Nombre de pièces</span>
                    <span class="relative mt-1.5 flex">
                      <input
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Entrez le nombre de pièces"
                        type="number"
                        name="nbre_pieces"
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                      >
                      <i class="far fa-warehouse text-base"></i>
                      </span>
                    </span>
                  </label>
                  <label class="block">
                    <span>Garages</span>
                    <br>
                    <span class="relative mt-1.5 flex">
                      <input
                        checked
                        class="form-radio is-basic h-5 w-5 rounded-full border-slate-400/70 checked:border-slate-500 checked:bg-slate-500 hover:border-slate-500 focus:border-slate-500 dark:border-navy-400 dark:checked:bg-navy-400"
                        name="garage"
                        type="radio"
                      />
                      &nbsp;&nbsp;
                      <span>Oui </span>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input
                        class="form-radio is-basic h-5 w-5 rounded-full border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                        name="garage"
                        type="radio"
                      />
                      &nbsp;&nbsp;
                      <span>Non</span>
                    </span>
                  </label>
                </div>

                <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                  <label class="block">
                    <span>Localisation</span>
                    <span class="relative mt-1.5 flex">
                      <input
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Entrez la localisation"
                        type="text"
                        name="localisation"
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                      >
                        <i class="far fa-clone text-base"></i>
                      </span>
                    </span>
                  </label>
                  <label class="block">
                    <span>Logitutude</span>
                    <span class="relative mt-1.5 flex">
                      <input
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Entrez la longitude"
                        type="number"
                        name="longitude"
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                      >
                      <i class="far fa-warehouse text-base"></i>
                      </span>
                    </span>
                  </label>
                  <label class="block">
                    <span>Latitude</span>
                    <span class="relative mt-1.5 flex">
                      <input
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Entrez la latitude"
                        type="text"
                        name="latitude"
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                      >
                      <i class="far fa-warehouse text-base"></i>
                      </span>
                    </span>
                  </label>
                </div>


                <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                  <label class="block">
                    <span>Prix</span>
                    <span class="relative mt-1.5 flex">
                      <input
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Entrez la localisation"
                        type="number"
                        name="prix"
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                      >
                        <i class="far fa-clone text-base"></i>
                      </span>
                    </span>
                  </label>
                  <label class="block">
                    <span>Taux d'avencement</span>
                    <span class="relative mt-1.5 flex">
                      <input
                        class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                        placeholder="Entrez la longitude"
                        type="number"
                        name="longitude"
                      />
                      <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                      >
                      <i class="far fa-warehouse text-base"></i>
                      </span>
                    </span>
                  </label>
                  
                </div>
                <div>
                  <span
                    class="font-medium text-slate-600 dark:text-navy-100"
                    >Description</span
                  >
                  <div class="mt-1.5 w-full">
                    <div
                      class="h-48"
                      x-init="$el._x_quill = new Quill($el,{
                        modules : {
                          toolbar: [
                            ['bold', 'italic', 'underline', 'strike'], // toggled buttons
                            ['blockquote', 'code-block'],
                            [{ header: 1 }, { header: 2 }], // custom button values
                            [{ list: 'ordered' }, { list: 'bullet' }],
                            [{ script: 'sub' }, { script: 'super' }], // superscript/subscript
                            [{ indent: '-1' }, { indent: '+1' }], // outdent/indent
                            [{ direction: 'rtl' }], // text direction
                            [{ size: ['small', false, 'large', 'huge'] }], // custom dropdown
                            [{ header: [1, 2, 3, 4, 5, 6, false] }],
                            [{ color: [] }, { background: [] }], // dropdown with defaults from theme
                            [{ font: [] }],
                            [{ align: [] }],
                            ['clean'], // remove formatting button
                          ],
                        },
                        placeholder: 'Enter your content...',
                        theme: 'snow',
                        name: 'description'
                      })"
                    ></div>
                  </div>
                </div>
                <div>
                  <span
                    class="font-medium text-slate-600 dark:text-navy-100"
                    >Gallerie images</span
                  >
                  <div
                    class="filepond fp-bordered fp-grid mt-1.5 [--fp-grid:2]"
                  >
                    <input
                      type="file"
                      {{-- x-init="$el._x_filepond = FilePond.create($el)" --}}
                      multiple 
                      name="gallerie[]"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-12 lg:col-span-4">

        <div class="card space-y-5 p-4 sm:p-5">
          <label class="block">
            <span class="font-medium text-slate-600 dark:text-navy-100"
              >Type de logement</span
            >
            <select
              class="mt-1.5 w-full"
              x-init="$el._x_tom = new Tom($el,{create: false,sortField: {field: 'text',direction: 'asc'}})"
              name="type_logement"
            >
              <option value>Selectinnez le type de logement</option>
              <option value="BEVERLY">BEVERLY</option>
              <option value="EXCELLIUM">EXCELLIUM</option>
              <option value="HARMONIE">HARMONIE</option>
              <option value="MEYERS C">MEYERS C</option>
              <option value="SOMOLI">SOMOLI</option>
            </select>
          </label>
          <label class="block">
            <span class="font-medium text-slate-600 dark:text-navy-100"
              >Finition</span
            >
            <select
              class="mt-1.5 w-full"
              x-init="$el._x_tom = new Tom($el,{create: false,sortField: {field: 'text',direction: 'asc'}})"
              name="finition"
            >
              <option value>Selectinnez la finition</option>
              <option value="Gros Œuvre">Gros Œuvre</option>
              <option value="Clé en main">Clé en main</option>
            </select>
          </label>
          {{-- <label class="block">
            <span class="font-medium text-slate-600 dark:text-navy-100"
              >Tags</span
            >
            <input
              class="mt-1.5 w-full"
              placeholder="Enter Tags"
              x-init="$el._x_tom = new Tom($el,{create: true})"
            />
          </label> 

          <label>
            <span class="font-medium text-slate-600 dark:text-navy-100"
              >Publish Date</span
            >
            <span class="relative mt-1.5 flex">
              <input
                x-init="$el._x_flatpickr = flatpickr($el)"
                class="form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                placeholder="Choose date..."
                type="text"
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
          --}}
        </div>
        <br>
        <div class="card space-y-5 p-4 sm:p-5">
          <span
            class="font-medium text-slate-600 dark:text-navy-100"
            >Illustration</span
          >
          <div
            class="filepond fp-bordered fp-grid mt-1.5 [--fp-grid:1]"
          >
            <input
              type="file"
              {{-- x-init="$el._x_filepond = FilePond.create($el)" --}}
              name="illustration"
            />
          </div>
        </div>
      </div>
    </div>
    {!! Form::close() !!}
  </main>
@endsection