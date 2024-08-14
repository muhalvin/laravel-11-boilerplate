<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <x-menu.brand />

    <ul class="py-1 menu-inner">

        <x-menu.menu-item :active="request()->routeIs('dashboard')">
            <x-menu.menu-link :href="route('dashboard')">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <span>Dashboard</span>
            </x-menu.menu-link>
        </x-menu.menu-item>

        <x-menu.menu-header title="Misc" />
        <x-menu.menu-item :active="request()->routeIs('logout')">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

            <a class="menu-link" href="#" onclick="event.preventDefault(); confirmLogout();">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                Logout
            </a>
        </x-menu.menu-item>

    </ul>
</aside>
