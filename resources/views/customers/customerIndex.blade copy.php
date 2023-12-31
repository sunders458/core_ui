@extends('layouts.app')

@section('content')
<!-- Main Content Wrapper -->
<main class="main-content w-full px-[var(--margin-x)] pb-8">
    @include('customers.partials.abonneStatistics')
    <div class="mt-4 sm:mt-5 lg:mt-6">
        <div>
            <div class="flex items-center justify-between">
              <h2
                class="text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100"
              >
                Collapsible Table
              </h2>
              <div class="flex">
                <div class="flex items-center" x-data="{isInputActive:false}">
                  <label class="block">
                    <input
                      x-effect="isInputActive === true && $nextTick(() => { $el.focus()});"
                      :class="isInputActive ? 'w-32 lg:w-48' : 'w-0'"
                      class="form-input bg-transparent px-1 text-right transition-all duration-100 placeholder:text-slate-500 dark:placeholder:text-navy-200"
                      placeholder="Search here..."
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
                <div
                  x-data="usePopper({placement:'bottom-end',offset:4})"
                  @click.outside="if(isShowPopper) isShowPopper = false"
                  class="inline-flex"
                >
                  <button
                    x-ref="popperRef"
                    @click="isShowPopper = !isShowPopper"
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
                        stroke-width="2"
                        d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"
                      />
                    </svg>
                  </button>
                  <div
                    x-ref="popperRoot"
                    class="popper-root"
                    :class="isShowPopper && 'show'"
                  >
                    <div
                      class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700"
                    >
                      <ul>
                        <li>
                          <a
                            href="components-table-advanced.html#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                            >Action</a
                          >
                        </li>
                        <li>
                          <a
                            href="components-table-advanced.html#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                            >Another Action</a
                          >
                        </li>
                        <li>
                          <a
                            href="components-table-advanced.html#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                            >Something else</a
                          >
                        </li>
                      </ul>
                      <div
                        class="my-1 h-px bg-slate-150 dark:bg-navy-500"
                      ></div>
                      <ul>
                        <li>
                          <a
                            href="components-table-advanced.html#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                            >Separated Link</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
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
                        Level
                      </th>
                      <th
                        class="whitespace-nowrap bg-slate-200 px-4 py-3 font-semibold text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        Stack
                      </th>
                      <th
                        class="whitespace-nowrap rounded-tr-lg bg-slate-200 px-4 py-3 font-semibold text-slate-800 dark:bg-navy-800 dark:text-navy-100 lg:px-5"
                      >
                        More
                      </th>
                    </tr>
                  </thead>
                  <tbody x-data="{expanded:false}">
                    <tr class="border-y border-transparent">
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">1</td>
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                        <div class="avatar flex">
                          <img
                            class="rounded-full"
                            src="images/avatar/avatar-3.jpg"
                            alt="avatar"
                          />
                        </div>
                      </td>
                      <td
                        class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5"
                      >
                        John Doe
                      </td>
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                        443-893-2316
                      </td>
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                        Level 1
                      </td>
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                        <div class="flex space-x-2">
                          <div
                            class="badge rounded-full border border-info text-info"
                          >
                            Tailwind
                          </div>
                          <div
                            class="badge rounded-full border border-success text-success"
                          >
                            Alpine
                          </div>
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
                      </td>
                    </tr>
                    <tr
                      class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                    >
                      <td colspan="100" class="p-0">
                        <div x-show="expanded" x-collapse>
                          <div class="px-4 pb-4 sm:px-5">
                            <p>
                              Lorem ipsum dolor, sit amet consectetur
                              adipisicing elit. Aut amet sunt repudiandae!
                            </p>
                            <div
                              class="is-scrollbar-hidden min-w-full overflow-x-auto"
                            >
                              <table class="is-hoverable w-full text-left">
                                <thead>
                                  <tr
                                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                  >
                                    <th
                                      class="whitespace-nowrap px-3 py-3 font-semibold text-slate-800 dark:text-navy-100 lg:px-5"
                                    >
                                      #
                                    </th>
                                    <th
                                      class="whitespace-nowrap px-3 py-3 font-semibold text-slate-800 dark:text-navy-100 lg:px-5"
                                    >
                                      Name
                                    </th>
                                    <th
                                      class="whitespace-nowrap px-3 py-3 font-semibold text-slate-800 dark:text-navy-100 lg:px-5"
                                    >
                                      Job
                                    </th>
                                    <th
                                      class="whitespace-nowrap px-3 py-3 font-semibold text-slate-800 dark:text-navy-100 lg:px-5"
                                    >
                                      Favorite Color
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr
                                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                  >
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      1
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Cy Ganderton
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Quality Control Specialist
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Blue
                                    </td>
                                  </tr>
                                  <tr
                                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                  >
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      2
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Hart Hagerty
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Desktop Support Technician
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Purple
                                    </td>
                                  </tr>
                                  <tr
                                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                  >
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      3
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Brice Swyre
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Tax Accountant
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Red
                                    </td>
                                  </tr>
                                  <tr
                                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                  >
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      4
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Marjy Ferencz
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Office Assistant I
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Crimson
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="text-right">
                              <button
                                @click="expanded = false"
                                class="btn mt-2 h-8 rounded px-3 text-xs+ font-medium text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
                              >
                                Hide
                              </button>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                  <tbody x-data="{expanded:false}">
                    <tr class="border-y border-transparent">
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">2</td>
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                        <div class="avatar flex">
                          <img
                            class="rounded-full"
                            src="images/avatar/avatar-8.jpg"
                            alt="avatar"
                          />
                        </div>
                      </td>
                      <td
                        class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5"
                      >
                        Sabina Mores
                      </td>
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                        684-4161-8911
                      </td>
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                        Level 2
                      </td>
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                        <div class="flex space-x-2">
                          <div
                            class="badge rounded-full border border-warning text-warning"
                          >
                            React
                          </div>
                          <div
                            class="badge rounded-full border border-info text-info"
                          >
                            Remix
                          </div>
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
                      </td>
                    </tr>
                    <tr
                      class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                    >
                      <td colspan="100" class="p-0">
                        <div x-show="expanded" x-collapse>
                          <div class="px-4 pb-4 sm:px-5">
                            <p>
                              Lorem ipsum dolor, sit amet consectetur
                              adipisicing elit. Aut amet sunt repudiandae!
                            </p>
                            <div
                              class="is-scrollbar-hidden min-w-full overflow-x-auto"
                            >
                              <table class="is-hoverable w-full text-left">
                                <thead>
                                  <tr
                                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                  >
                                    <th
                                      class="whitespace-nowrap px-3 py-3 font-semibold text-slate-800 dark:text-navy-100 lg:px-5"
                                    >
                                      #
                                    </th>
                                    <th
                                      class="whitespace-nowrap px-3 py-3 font-semibold text-slate-800 dark:text-navy-100 lg:px-5"
                                    >
                                      Name
                                    </th>
                                    <th
                                      class="whitespace-nowrap px-3 py-3 font-semibold text-slate-800 dark:text-navy-100 lg:px-5"
                                    >
                                      Job
                                    </th>
                                    <th
                                      class="whitespace-nowrap px-3 py-3 font-semibold text-slate-800 dark:text-navy-100 lg:px-5"
                                    >
                                      Favorite Color
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr
                                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                  >
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      1
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Cy Ganderton
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Quality Control Specialist
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Blue
                                    </td>
                                  </tr>
                                  <tr
                                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                  >
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      2
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Hart Hagerty
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Desktop Support Technician
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Purple
                                    </td>
                                  </tr>
                                  <tr
                                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                  >
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      3
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Brice Swyre
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Tax Accountant
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Red
                                    </td>
                                  </tr>
                                  <tr
                                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                  >
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      4
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Marjy Ferencz
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Office Assistant I
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Crimson
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="text-right">
                              <button
                                @click="expanded = false"
                                class="btn mt-2 h-8 rounded px-3 text-xs+ font-medium text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
                              >
                                Hide
                              </button>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                  <tbody x-data="{expanded:false}">
                    <tr class="border-y border-transparent">
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">2</td>
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                        <div class="avatar flex">
                          <img
                            class="rounded-full"
                            src="images/avatar/avatar-4.jpg"
                            alt="avatar"
                          />
                        </div>
                      </td>
                      <td
                        class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5"
                      >
                        Tom Robert
                      </td>
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                        179-911-3218
                      </td>
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                        Level 3
                      </td>
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                        <div class="flex space-x-2">
                          <div
                            class="badge rounded-full border border-error text-error"
                          >
                            Bootstrap
                          </div>
                          <div
                            class="badge rounded-full border border-secondary text-secondary dark:border-secondary-light dark:text-secondary-light"
                          >
                            Tailwind
                          </div>
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
                      </td>
                    </tr>
                    <tr
                      class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                    >
                      <td colspan="100" class="p-0">
                        <div x-show="expanded" x-collapse>
                          <div class="px-4 pb-4 sm:px-5">
                            <p>
                              Lorem ipsum dolor, sit amet consectetur
                              adipisicing elit. Aut amet sunt repudiandae!
                            </p>
                            <div
                              class="is-scrollbar-hidden min-w-full overflow-x-auto"
                            >
                              <table class="is-hoverable w-full text-left">
                                <thead>
                                  <tr
                                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                  >
                                    <th
                                      class="whitespace-nowrap px-3 py-3 font-semibold text-slate-800 dark:text-navy-100 lg:px-5"
                                    >
                                      #
                                    </th>
                                    <th
                                      class="whitespace-nowrap px-3 py-3 font-semibold text-slate-800 dark:text-navy-100 lg:px-5"
                                    >
                                      Name
                                    </th>
                                    <th
                                      class="whitespace-nowrap px-3 py-3 font-semibold text-slate-800 dark:text-navy-100 lg:px-5"
                                    >
                                      Job
                                    </th>
                                    <th
                                      class="whitespace-nowrap px-3 py-3 font-semibold text-slate-800 dark:text-navy-100 lg:px-5"
                                    >
                                      Favorite Color
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr
                                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                  >
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      1
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Cy Ganderton
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Quality Control Specialist
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Blue
                                    </td>
                                  </tr>
                                  <tr
                                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                  >
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      2
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Hart Hagerty
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Desktop Support Technician
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Purple
                                    </td>
                                  </tr>
                                  <tr
                                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                  >
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      3
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Brice Swyre
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Tax Accountant
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Red
                                    </td>
                                  </tr>
                                  <tr
                                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                  >
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      4
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Marjy Ferencz
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Office Assistant I
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Crimson
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="text-right">
                              <button
                                @click="expanded = false"
                                class="btn mt-2 h-8 rounded px-3 text-xs+ font-medium text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
                              >
                                Hide
                              </button>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                  <tbody x-data="{expanded:false}">
                    <tr class="border-y border-transparent">
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">2</td>
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                        <div class="avatar flex">
                          <img
                            class="rounded-full"
                            src="images/avatar/avatar-14.jpg"
                            alt="avatar"
                          />
                        </div>
                      </td>
                      <td
                        class="whitespace-nowrap px-4 py-3 font-medium text-slate-700 dark:text-navy-100 sm:px-5"
                      >
                        Nolan Doe
                      </td>
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                        766-9746-1462
                      </td>
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                        Level 4
                      </td>
                      <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                        <div class="flex space-x-2">
                          <div
                            class="badge rounded-full border border-info text-info"
                          >
                            Tailwind
                          </div>
                          <div
                            class="badge rounded-full border border-success text-success"
                          >
                            Alpine
                          </div>
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
                      </td>
                    </tr>
                    <tr
                      class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                    >
                      <td colspan="100" class="p-0">
                        <div x-show="expanded" x-collapse>
                          <div class="px-4 pb-4 sm:px-5">
                            <p>
                              Lorem ipsum dolor, sit amet consectetur
                              adipisicing elit. Aut amet sunt repudiandae!
                            </p>
                            <div
                              class="is-scrollbar-hidden min-w-full overflow-x-auto"
                            >
                              <table class="is-hoverable w-full text-left">
                                <thead>
                                  <tr
                                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                  >
                                    <th
                                      class="whitespace-nowrap px-3 py-3 font-semibold text-slate-800 dark:text-navy-100 lg:px-5"
                                    >
                                      #
                                    </th>
                                    <th
                                      class="whitespace-nowrap px-3 py-3 font-semibold text-slate-800 dark:text-navy-100 lg:px-5"
                                    >
                                      Name
                                    </th>
                                    <th
                                      class="whitespace-nowrap px-3 py-3 font-semibold text-slate-800 dark:text-navy-100 lg:px-5"
                                    >
                                      Job
                                    </th>
                                    <th
                                      class="whitespace-nowrap px-3 py-3 font-semibold text-slate-800 dark:text-navy-100 lg:px-5"
                                    >
                                      Favorite Color
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr
                                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                  >
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      1
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Cy Ganderton
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Quality Control Specialist
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Blue
                                    </td>
                                  </tr>
                                  <tr
                                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                  >
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      2
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Hart Hagerty
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Desktop Support Technician
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Purple
                                    </td>
                                  </tr>
                                  <tr
                                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                  >
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      3
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Brice Swyre
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Tax Accountant
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Red
                                    </td>
                                  </tr>
                                  <tr
                                    class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                                  >
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      4
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Marjy Ferencz
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Office Assistant I
                                    </td>
                                    <td
                                      class="whitespace-nowrap px-4 py-3 sm:px-5"
                                    >
                                      Crimson
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="text-right">
                              <button
                                @click="expanded = false"
                                class="btn mt-2 h-8 rounded px-3 text-xs+ font-medium text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25"
                              >
                                Hide
                              </button>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div
                class="flex flex-col justify-between space-y-4 px-4 py-4 sm:flex-row sm:items-center sm:space-y-0 sm:px-5"
              >
                <div class="text-xs+">1 - 10 of 10 entries</div>

                <ol class="pagination">
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
                </ol>
              </div>
            </div>
          </div>


    </div>


  </main>

@endsection
