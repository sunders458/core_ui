<div class="sidebar print:hidden">
    <!-- Main Sidebar -->
    @include('layouts.mainSidebar')




    <!-- Sidebar Panel -->





    @if(request()->is('clients')|| request()->is('prospects/create'))
        @include('layouts.menus.menuClient')
    @elseif (request()->is('settings')|| request()->is('users')|| request()->is('users/create'))
        @include('layouts.menus.menuSettings')
    @else
        @include('layouts.sidebarPanel')
    @endif


  </div>
