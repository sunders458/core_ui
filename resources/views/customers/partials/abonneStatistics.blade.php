<div
      class="mt-4 grid grid-cols-1 gap-4 sm:mt-5 sm:grid-cols-3 sm:gap-5 lg:mt-6 lg:gap-6"
    >
      <div class="card shadow-none">
        <div class="mt-2 flex h-8 items-center justify-between px-4">
          <h2
            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100"
          >
            Clients Growth
          </h2>

          <div
            x-data="usePopper({placement:'bottom-end',offset:4})"
            @click.outside="if(isShowPopper) isShowPopper = false"
            class="inline-flex"
          >
            <button
              x-ref="popperRef"
              @click="isShowPopper = !isShowPopper"
              class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
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
                      href="dashboards-employees.html#"
                      class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                      >Action</a
                    >
                  </li>
                  <li>
                    <a
                      href="dashboards-employees.html#"
                      class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                      >Another Action</a
                    >
                  </li>
                  <li>
                    <a
                      href="dashboards-employees.html#"
                      class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                      >Something else</a
                    >
                  </li>
                </ul>
                <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                <ul>
                  <li>
                    <a
                      href="dashboards-employees.html#"
                      class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                      >Separated Link</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <p class="grow px-4">
          <span class="text-2xl font-semibold text-success">16k</span>
          <span class="text-xs">+6%</span>
        </p>

        <div class="ax-transparent-gridline ax-rounded-b-lg">
          <div
            x-init="$nextTick(() => { $el._x_chart = new ApexCharts($el,pages.charts.clientsGrowth); $el._x_chart.render() });"
          ></div>
        </div>
      </div>
      <div class="card shadow-none">
        <div class="mt-2 flex h-8 items-center justify-between px-4">
          <h2
            class="font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100"
          >
            Sales Growth
          </h2>

          <div
            x-data="usePopper({placement:'bottom-end',offset:4})"
            @click.outside="if(isShowPopper) isShowPopper = false"
            class="inline-flex"
          >
            <button
              x-ref="popperRef"
              @click="isShowPopper = !isShowPopper"
              class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
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
                      href="dashboards-employees.html#"
                      class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                      >Action</a
                    >
                  </li>
                  <li>
                    <a
                      href="dashboards-employees.html#"
                      class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                      >Another Action</a
                    >
                  </li>
                  <li>
                    <a
                      href="dashboards-employees.html#"
                      class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                      >Something else</a
                    >
                  </li>
                </ul>
                <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                <ul>
                  <li>
                    <a
                      href="dashboards-employees.html#"
                      class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                      >Separated Link</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <p class="grow px-4">
          <span class="text-2xl font-semibold text-warning">45k</span>
          <span class="text-xs">+3%</span>
        </p>

        <div class="ax-transparent-gridline ax-rounded-b-lg">
          <div
            x-init="$nextTick(() => { $el._x_chart = new ApexCharts($el,pages.charts.salesGrowth); $el._x_chart.render() });"
          ></div>
        </div>
      </div>
      <div
        class="card flex-row justify-between p-4 sm:flex-col lg:flex-row"
      >
        <div class="flex flex-col justify-between">
          <div class="space-y-2 pb-2">
            <h2
              class="font-medium tracking-wide text-slate-700 dark:text-navy-100"
            >
              Completed Task
            </h2>

            <div
              class="badge h-6 space-x-1 rounded-full bg-info/10 text-info dark:bg-info/15"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-3.5 w-3.5"
                viewBox="0 0 20 20"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                  clip-rule="evenodd"
                />
              </svg>
              <span>34%</span>
            </div>
          </div>
          <p class="flex space-x-1 text-xs sm:hidden lg:flex">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-4.5 w-4.5 text-slate-400 dark:text-navy-300"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.5"
                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
              />
            </svg>
            <span>2 Days limit</span>
          </p>
        </div>
        <div class="flex items-center justify-center">
          <div
            x-init="$nextTick(() => { $el._x_chart = new ApexCharts($el,pages.charts.employeesTask); $el._x_chart.render() });"
          ></div>
        </div>
      </div>
    </div>