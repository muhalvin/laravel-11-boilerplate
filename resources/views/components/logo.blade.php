<div class="app-brand justify-content-center">
    <a href="{{ url('/') }}" class="gap-2 app-brand-link">
        <span class="app-brand-text demo text-body fw-bold">
            @if (!empty(trim($__env->yieldContent('title'))))
                @yield('title')
            @else
                {{ config('app.name', 'Laravel') }}
            @endif
        </span>
    </a>
</div>
