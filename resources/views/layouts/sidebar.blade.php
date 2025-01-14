<div class="sidebar print:hidden">
    <!-- Main Sidebar -->
    @include('layouts.mainSidebar')
    @if(request()->is('clients')|| request()->is('prospects/create')|| request()->is('clients/create')|| request()->is('prospects')|| request()->is('prospects/*/edit')||request()->is('all-prospects'))
        @include('layouts.menus.menuClient')
    @endif  
    @if(request()->is('projets')||request()->is('projets/create')||request()->is('logements')|| request()->is('logements/create'))
        @include('layouts.menus.menubien')
    @endif 

    @if (request()->is('settings')|| request()->is('users')|| request()->is('users/create'))
        @include('layouts.menus.menuSettings')
    @endif
    @if(request()->is('/'))
        @include('layouts.sidebarPanel')
    @endif
</div>