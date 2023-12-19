@extends('layouts.app')
@section('content')
<!-- Main Content Wrapper -->
<main class="main-content w-full px-[var(--margin-x)] pb-8">
    <div
      class="mt-4 grid grid-cols-12 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6"
    >
    <!--
      <div class="card col-span-12 pb-4">
        <div class="mt-3 flex items-center justify-between px-4 sm:px-5">
          <h2
            class="text-sm+ font-medium tracking-wide text-slate-700 dark:text-navy-100"
          >
            Page Views
          </h2>

          <div class="flex items-center space-x-4">
            <div
              class="hidden cursor-pointer items-center space-x-2 sm:flex"
            >
              <div class="h-3 w-3 rounded-full bg-accent"></div>
              <p>Current Period</p>
            </div>
            <div
              class="hidden cursor-pointer items-center space-x-2 sm:flex"
            >
              <div class="h-3 w-3 rounded-full bg-warning"></div>
              <p>Previous Period</p>
            </div>
            <select
              class="form-select h-8 rounded-full border border-slate-300 bg-white px-2.5 pr-9 text-xs+ hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent"
            >
              <option>Last week</option>
              <option>Last month</option>
              <option>Last year</option>
            </select>
          </div>
        </div>
        <div class="mt-3 grid grid-cols-12">
          <div class="col-span-12 px-4 sm:col-span-6 sm:px-5 lg:col-span-4">
            <select
              class="mt-1.5 w-full"
              x-init="$el._x_tom = new Tom($el,{sortField: {field: 'text',direction: 'asc'}})"
            >
              <option>Travel Blog Page</option>
              <option>Courses Page</option>
              <option>Grammar Page</option>
              <option>Sport Page</option>
              <option>Jobs Page</option>
              <option>Server Status Page</option>
            </select>
            <div class="mt-6 grid grid-cols-2 gap-x-4 gap-y-8">
              <div>
                <p
                  class="text-xs uppercase text-slate-400 dark:text-navy-300"
                >
                  Total Views
                </p>
                <p
                  class="mt-1 text-xl font-medium text-slate-700 dark:text-navy-100"
                >
                  695,454
                </p>
              </div>

              <div>
                <p
                  class="text-xs uppercase text-slate-400 dark:text-navy-300"
                >
                  Monthly increase
                </p>
                <p class="mt-1">
                  <span
                    class="text-xl font-medium text-slate-700 dark:text-navy-100"
                  >
                    16,146
                  </span>
                  <span class="text-xs text-success">+3%</span>
                </p>
              </div>
              <div>
                <p
                  class="text-xs uppercase text-slate-400 dark:text-navy-300"
                >
                  Post made
                </p>
                <p
                  class="mt-1 text-xl font-medium text-slate-700 dark:text-navy-100"
                >
                  469
                </p>
              </div>
              <div>
                <p
                  class="text-xs uppercase text-slate-400 dark:text-navy-300"
                >
                  Avg post view
                </p>
                <p
                  class="mt-1 text-xl font-medium text-slate-700 dark:text-navy-100"
                >
                  1,559
                </p>
              </div>
              <div>
                <p
                  class="text-xs uppercase text-slate-400 dark:text-navy-300"
                >
                  Total comments
                </p>
                <p
                  class="mt-1 text-xl font-medium text-slate-700 dark:text-navy-100"
                >
                  198
                </p>
              </div>
              <div>
                <p
                  class="text-xs uppercase text-slate-400 dark:text-navy-300"
                >
                  Post Referred
                </p>
                <p
                  class="mt-1 text-xl font-medium text-slate-700 dark:text-navy-100"
                >
                  49
                </p>
              </div>
            </div>
          </div>
          <div
            class="ax-transparent-gridline col-span-12 px-2 sm:col-span-6 lg:col-span-8"
          >
            <div
              x-init="$nextTick(() => { $el._x_chart = new ApexCharts($el,pages.charts.analyticsPagesViews); $el._x_chart.render() });"
            ></div>
          </div>
        </div>
      </div>
    -->
    <div class="col-span-12 xl:col-span-5">
        <div class="-mt-1 flex items-center justify-between">
          <h2
            class="text-sm+ font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100"
          >
            Gestion des rôles
          </h2>
        </div>
        <div class="card mt-3">
          <div class="is-scrollbar-hidden min-w-full overflow-x-auto">
            <table class="is-hoverable w-full text-left">
              <thead>
                <tr>
                  <th
                    class="whitespace-nowrap rounded-tl-lg bg-slate-100 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100"
                  >
                  No
                  </th>
                  <th
                    class="whitespace-nowrap bg-slate-100 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                  >
                    Libéllé
                  </th>
                  <th
                    class="whitespace-nowrap bg-slate-100 px-4 py-3 font-semibold uppercase text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                  >
                  Action
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($theroles as $key => $elmt)
                    <tr
                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                    >
                        <td class="whitespace-nowrap px-4 py-3">
                            <p
                            class="text-center text-base font-medium text-slate-700 dark:text-navy-100"
                            >
                            {{ ++$i }}
                            </p>
                        </td>
                        <td class="min-w-[20rem] px-4 py-3 sm:px-5">
                            <div class="flex items-center space-x-4">
                            <span
                                class="font-medium text-slate-700 line-clamp-2 dark:text-navy-100"
                                >{{ $elmt->name }}
                            </span>
                            </div>
                        </td>
                        <td
                            class="whitespace-nowrap px-4 py-3 font-medium text-slate-600 dark:text-navy-100 sm:px-5"
                        >

                                @can('role-edit')
                                    <a
                                        class="btn h-8 w-8 p-0 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25"
                                        href="{{ route('roles.edit',$elmt->id) }}"
                                    >
                                    <i class="fa fa-edit"></i>
                                    </a>
                                @endcan
                            @can('role-delete')
                                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $elmt->id],'style'=>'display:inline']) !!}
                                    <button class="btn h-8 w-8 p-0 text-error hover:bg-error/20 focus:bg-error/20 active:bg-error/25">
                                        <i class="fa fa-trash-alt"></i>
                                    </button>
                                {!! Form::close() !!}
                            @endcan
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

        <div class="col-span-12 xl:col-span-7">
            {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
            <div class="card p-4 sm:p-5">
                <p
                class="text-base font-medium text-slate-700 dark:text-navy-100"
            >
                Editer un rôle
                </p>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <label class="block">
                    <span>Libéllé</span>
                    <span class="relative mt-1.5 flex">

                        {!! Form::text('name', null, array('placeholder' => 'Entrez le rôle','class' => 'form-input peer w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent')) !!}
                        <span
                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
                        >
                        <i class="fa fa-unlock-alt text-base"></i>
                        </span>
                    </span>
                    </label>
                </div>

                <div class="flex justify-end space-x-2">
                    <button
                    class="btn space-x-2 bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                    >
                    <span>Annuler</span>
                    </button>
                    <button
                    class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
                    type="submit"
                    >
                    <span>Modifier</span>
                    </button>
                </div>
            </div>

            <div class="card px-4 pb-4 sm:px-5 gap-4 sm:mt-5 sm:gap-5 lg:mt-6 lg:gap-6">
                <div class="my-3 flex h-8 items-center justify-between">
                <h2
                    class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100 lg:text-base"
                >
                    Permissions
                </h2>

                </div>
                <div class="max-w-2xl">
                <p>
                    Rôles
                </p>

                <div
                    class="mt-5 grid grid-cols-2 place-items-start gap-6 sm:grid-cols-4"
                >
                    @foreach ($permission as $value)
                        <label class="inline-flex items-center space-x-2">

                            {{ Form::checkbox('permission[]', $value->name, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'form-checkbox is-outline h-5 w-5 rounded border-slate-400/70 before:bg-slate-500 checked:border-slate-500 hover:border-slate-500 focus:border-slate-500 dark:border-navy-400 dark:before:bg-navy-200 dark:checked:border-navy-200 dark:hover:border-navy-200 dark:focus:border-navy-200')) }}
                            <span>
                                {{ $value->name }}
                            </span>
                        </label>
                    @endforeach
                </div>
                </div>



            {!! Form::close() !!}
        </div>


    </div>
  </main>
@endsection
