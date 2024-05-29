<x-auth-layout>
    <div class="card">
        <div class="card-body">

            <x-logo />

            <h4 class="mb-2">Forgot Password? 🔒</h4>
            <p class="mb-4">
                Enter your email and we'll send you instructions to reset your password
            </p>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form id="formAuthentication" class="mb-3" action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <button class="btn btn-primary d-grid w-100" type="submit">Send Reset Link</button>
            </form>
            <div class="text-center">
                <a href="{{ route('login') }}" class="d-flex align-items-center justify-content-center">
                    <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                    Back to login
                </a>
            </div>
        </div>
    </div>
</x-auth-layout>
