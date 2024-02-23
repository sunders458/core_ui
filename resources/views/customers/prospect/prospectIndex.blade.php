@extends('layouts.app')

@section('content')
<!-- Main Content Wrapper -->
<main class="main-content w-full px-[var(--margin-x)] pb-8">
    <div class="mt-4 sm:mt-5 lg:mt-6">
      {{-- <div class="card col-span-12 lg:col-span-8 xl:col-span-9">
        
        <div
          class="mt-5 grid grid-cols-1 gap-4 px-4 sm:grid-cols-3 sm:px-5"
        >
          <div
            class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-info to-info-focus p-3.5"
          >
            <p class="text-xs uppercase text-sky-100">Nombre total</p>
            <div class="flex items-end justify-between space-x-2">
              <p class="mt-4 text-2xl font-medium text-white">31,556</p>
              <a
                href="dashboards-travel.html#"
                class="border-b border-dotted border-current pb-0.5 text-xs font-medium text-sky-100 outline-none transition-colors duration-300 line-clamp-1 hover:text-white focus:text-white"
                >
              </a>
            </div>
            <div
              class="mask is-reuleaux-triangle absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"
            ></div>
          </div>
          <div
            class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-amber-400 to-orange-600 p-3.5"
          >
            <p class="text-xs uppercase text-amber-50">Total souscription</p>
            <div class="flex items-end justify-between space-x-2">
              <p class="mt-4 text-2xl font-medium text-white">$61,556</p>
              <a
                href="dashboards-travel.html#"
                class="border-b border-dotted border-current pb-0.5 text-xs font-medium text-amber-50 outline-none transition-colors duration-300 line-clamp-1 hover:text-white focus:text-white"
                >Get Report
              </a>
            </div>
            <div
              class="mask is-diamond absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"
            ></div>
          </div>
          <div
            class="relative flex flex-col overflow-hidden rounded-lg bg-gradient-to-br from-pink-500 to-rose-500 p-3.5"
          >
            <p class="text-xs uppercase text-pink-100">Total Debt</p>
            <div class="flex items-end justify-between space-x-2">
              <p class="mt-4 text-2xl font-medium text-white">$12,556</p>
              <a
                href="dashboards-travel.html#"
                class="border-b border-dotted border-current pb-0.5 text-xs font-medium text-pink-100 outline-none transition-colors duration-300 line-clamp-1 hover:text-white focus:text-white"
                >Get Report
              </a>
            </div>
            <div
              class="mask is-hexagon-2 absolute top-0 right-0 -m-3 h-16 w-16 bg-white/20"
            ></div>
          </div>
        </div>

        

        <div
          class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5"
        >
        </div>
      </div> --}}
      <br>
        <div>
            <div class="flex items-center justify-between">
              <h2
                class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100"
              >
                Liste des prospects
              </h2>
              <div class="flex">
                <div class="flex items-center" x-data="{isInputActive:false}">
                  <label class="block">
                    <input
                      x-effect="isInputActive === true && $nextTick(() => { $el.focus()});"
                      :class="isInputActive ? 'w-32 lg:w-48' : 'w-0'"
                      class="form-input bg-transparent px-1 text-right transition-all duration-100 placeholder:text-slate-500 dark:placeholder:text-navy-200"
                      placeholder="Rechercher"
                      type="text"
                    />
                  </label>
                  <button
                    @click="isInputActive = !isInputActive"
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-4.5 w-4.5"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                      />
                    </svg>
                  </button>
                </div>
                
              </div>
            </div>
            <div class="card mt-3">
              <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
                <table class="w-full text-left">
                  <thead>
                    <tr>
                      <th
                        class="whitespace-nowrap rounded-tl-lg bg-slate-200 px-4 py-3 font-semibold text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        #
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Nom & Prenoms
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Contacts
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Inscris le :
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Email
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Souscription
                      </th>
                      <th
                        class="whitespace-nowrap rounded-tr-lg bg-slate-200 px-4 py-3 font-semibold text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Actions
                      </th>
                    </tr>
                  </thead>
                  @foreach ($data as $item)
                  <tbody x-data="{expanded:false}">
                    <tr class="border-y border-transparent">
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                        {{++$i}}
                      </td>
                      <td
                      class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5"
                      >
                      {{$item->name}} {{$item->firstname}}
                    </td>
                    <td
                      class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5"
                    >
                    {{$item->phone}}
                    </td>
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                      
                      {{ \Carbon\Carbon::parse($item->updated_at)->locale('fr')->translatedFormat('D d M Y') }}
                    </td>
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                      {{$item->email}}
                    </td>
                    <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                      <div class="flex space-x-2">
                        @foreach ($item->bien as $mybien)
                        @if(is_object($mybien) && isset($mybien->type_logement))
                          <div class="badge rounded-full border border-info text-info">
                            {{$mybien->type_logement}}
                          </div>
                        @else
                          Aucun bien
                        @endif
                        @endforeach
                      </div> 
                    </td>

                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                        <button
                          @click="expanded = !expanded"
                          class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                        >
                          <i
                            :class="expanded && '-rotate-180'"
                            class="fas fa-chevron-down text-sm transition-transform"
                          ></i>
                        </button>

                        <a
                          
                          class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                          href="{{ route('prospects.edit',$item->id) }}"
                        >
                          <i
                            :class="expanded && '-rotate-180'"
                            class="fas fa-pencil text-sm transition-transform"
                          ></i>
                        </a>
                      </td>
                    </tr>
                    <tr
                      class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                    >
                      <td colspan="100" class="p-0">
                        <div x-show="expanded" x-collapse>
                          <div class="px-4 pb-4 sm:px-5">
                            <p>
                             
                            </p>

                            
                           
                            <div class="grid grid-cols-12 gap-4 sm:gap-5 lg:gap-6">
                              
                              <div class="col-span-3 lg:col-span-3">
                                <div class="card w-64 shrink-0 pb-3">
                                  <div class="h-20 rounded-t-lg bg-primary dark:bg-accent">
                                    <img
                                      class="h-full w-full rounded-t-lg object-cover object-center"
                                      src="{{asset('core_ui/images/object/object-13.jpg')}}"
                                      alt="image"
                                    />
                                  </div>
                                  <div class="px-4 py-2 sm:px-5">
                                    <div class="flex justify-between space-x-4">
                                      <div class="avatar -mt-12 h-20 w-20">
                                        <img
                                          class="rounded-full border-2 border-white dark:border-navy-700"
                                          src="{{asset('core_ui/images/avatar/avatar-19.jpg')}}"
                                          alt="avatar"
                                        />
                                      </div>
                                      {{-- <div class="flex space-x-2">
                                        <button
                                          class="btn h-7 w-7 rounded-full bg-primary/10 p-0 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
                                        >
                                          <i class="fab fa-twitter"></i>
                                        </button>
                                        <button
                                          class="btn h-7 w-7 rounded-full bg-primary/10 p-0 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
                                        >
                                          <i class="fab fa-instagram text-base"></i>
                                        </button>
                                        <button
                                          class="btn h-7 w-7 rounded-full bg-primary/10 p-0 text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
                                        >
                                          <i class="fab fa-facebook-f"></i>
                                        </button>
                                      </div> --}}
                                    </div>
                                    <h3
                                      class="pt-2 text-base font-medium text-slate-700 dark:text-navy-100"
                                    >
                                    {{$item->name}} {{$item->firstname}}
                                    </h3>
                                    <p class="text-xs text-slate-400 dark:text-navy-300">
                                      {{$item->city}}, {{$item->residence}}
                                    </p>
                                    
                                    
                                  </div>
                                </div>
                              </div>
                              <div class="col-span-9 lg:col-span-9">

                                <div
                                class="is-scrollbar-hidden min-w-full overflow-x-auto"
                                >
                                  <table class="is-hoverable w-full text-left">
                                    <thead>
                                      <tr
                                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                      >
                                        {{-- <th
                                          class="whitespace-nowrap px-3 py-3 font-semibold text-slate-800 dark:text-navy-100 lg:px-5"
                                        >
                                          #
                                        </th> --}}
                                        <th
                                          class="whitespace-nowrap px-3 py-3 font-semibold text-slate-800 dark:text-navy-100 lg:px-5"
                                        >
                                        Type de logement
                                        </th>
                                        <th
                                          class="whitespace-nowrap px-3 py-3 font-semibold text-slate-800 dark:text-navy-100 lg:px-5"
                                        >
                                        finition
                                        </th>
                                        <th
                                          class="whitespace-nowrap px-3 py-3 font-semibold text-slate-800 dark:text-navy-100 lg:px-5"
                                        >
                                        prix
                                        </th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($item->bien as $mbien)
                                        <tr class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500">
                                          @if(isset($mbien->type_logement))
                                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{$mbien->type_logement}}</td>
                                          @endif
                                          @if(isset($mbien->finition))
                                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{$mbien->finition}}</td>
                                          @endif
                                          @if(isset($mbien->prix))
                                            <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{number_format($mbien->prix, 0, ',', ' ')}} F CFA</td>
                                          @endif
                                        </tr>
                                      @endforeach 
                                    </tbody>
                                  </table>
                                </div> 

                              </div>
                            </div>
                            <div class="text-right">
                              <button
                                @click="expanded = false"
                                class="btn mt-2 h-8 rounded px-3 text-xs+ font-medium text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
                              >
                                masquer
                              </button>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>
              </div>
              <div
                class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5"
              >
                <div class="text-xs+">1 - 10 of 10 entries</div>
    
                {{-- <ol class="pagination">
                  <li class="rounded-l-full bg-slate-150 dark:bg-navy-500">
                    <a
                      href="components-table-advanced.html#"
                      class="flex h-8 w-8 items-center justify-center rounded-full text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          d="M15 19l-7-7 7-7"
                        />
                      </svg>
                    </a>
                  </li>
                  <li class="bg-slate-150 dark:bg-navy-500">
                    <a
                      href="components-table-advanced.html#"
                      class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                      >1</a
                    >
                  </li>
                  <li class="bg-slate-150 dark:bg-navy-500">
                    <a
                      href="components-table-advanced.html#"
                      class="flex h-8 min-w-[2rem] items-center justify-center rounded-full bg-primary px-3 leading-tight text-white transition-colors hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                      >2</a
                    >
                  </li>
                  <li class="bg-slate-150 dark:bg-navy-500">
                    <a
                      href="components-table-advanced.html#"
                      class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                      >3</a
                    >
                  </li>
                  <li class="bg-slate-150 dark:bg-navy-500">
                    <a
                      href="components-table-advanced.html#"
                      class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                      >4</a
                    >
                  </li>
                  <li class="bg-slate-150 dark:bg-navy-500">
                    <a
                      href="components-table-advanced.html#"
                      class="flex h-8 min-w-[2rem] items-center justify-center rounded-full px-3 leading-tight transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                      >5</a
                    >
                  </li>
                  <li class="rounded-r-full bg-slate-150 dark:bg-navy-500">
                    <a
                      href="components-table-advanced.html#"
                      class="flex h-8 w-8 items-center justify-center rounded-full text-slate-500 transition-colors hover:bg-slate-300 focus:bg-slate-300 active:bg-slate-300/80 dark:text-navy-200 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M9 5l7 7-7 7"
                        />
                      </svg>
                    </a>
                  </li>
                </ol> --}}
    
              </div>
            </div>
          </div>
    </div>
  </main>

@endsection
