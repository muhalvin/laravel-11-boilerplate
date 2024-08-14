<x-auth-layout>
    <div class="card">
        <div class="card-body">

            <x-logo />

            <form id="formAuthentication" class="mb-3" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <x-input-label for="username" class="form-label" :value="__('username')" />
                    <x-text-input id="username" type="text" name="username" :value="old('username')" required autofocus />
                </div>
                <x-input-error :messages="$errors->get('username')" class="mt-2" />


                <div class="mb-3">
                    <x-input-label for="email" class="form-label" :value="__('email')" />
                    <x-text-input id="email" type="email" name="email" :value="old('email')" required />
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />


                <div class="mb-3">
                    <x-input-label for="name" class="form-label" :value="__('name')" />
                    <x-text-input id="name" type="text" name="name" :value="old('name')" required />
                </div>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />


                <div class="mb-3 form-password-toggle">
                    <x-input-label for="password" class="form-label" :value="__('password')" />
                    <div class="input-group input-group-merge">
                        <x-text-input id="password" type="password" name="password" required placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                        <span class="cursor-pointer input-group-text"><i class="bx bx-hide"></i></span>
                    </div>
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />


                <div class="mb-3 form-password-toggle">
                    <x-input-label for="password_confirmation" class="form-label" :value="__('password_confirmation')" />
                    <div class="input-group input-group-merge">
                        <x-text-input id="password_confirmation" type="password" name="password_confirmation" required
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                        <span class="cursor-pointer input-group-text"><i class="bx bx-hide"></i></span>
                    </div>
                </div>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />


                <button class="btn btn-primary d-grid w-100">Sign up</button>
            </form>

            <p class="text-center">
                <span>Already have an account?</span>
                <a href="{{ route('login') }}">
                    <span>Sign in instead</span>
                </a>
            </p>
        </div>
    </div>

</x-auth-layout>
