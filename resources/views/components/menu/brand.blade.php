<div class="app-brand demo">
    <a href="{{ url('/') }}" class="app-brand-link">
        <span class="app-brand-text demo menu-text fw-bold ms-2">
            @if (!empty(trim($__env->yieldContent('title'))))
                @yield('title')
            @else
                {{ config('app.name', 'Laravel') }}
            @endif
        </span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="align-middle bx bx-chevron-left bx-sm"></i>
    </a>
</div>

<div class="menu-inner-shadow"></div>
