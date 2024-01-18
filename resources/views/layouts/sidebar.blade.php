<div class="sidebar print:hidden">
    <!-- Main Sidebar -->
    @include('layouts.mainSidebar')

    <!-- Sidebar Panel -->
    @if(request()->is('clients')|| request()->is('prospects/create')|| request()->is('clients/create')|| request()->is('prospects')|| request()->is('prospects/*/edit'))
        @include('layouts.menus.menuClient')
    @endif  
    @if(request()->is('logements')|| request()->is('logements/create'))
        @include('layouts.menus.menubien')
    @endif 

    @if (request()->is('settings')|| request()->is('users')|| request()->is('users/create'))
        @include('layouts.menus.menuSettings')
    @endif
    @if(request()->is('/'))
        @include('layouts.sidebarPanel')
    @endif
  </div>
  logements