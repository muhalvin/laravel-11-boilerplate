<x-auth-layout>

    <div class="card">
        <div class="card-body">

            <x-logo />

            <p class="mb-4">Please sign-in to your account and start the adventure</p>

            <x-auth-session-status class="mb-1" :status="session('status')" />

            <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="emailOrUsername" class="form-label">Email or Username</label>
                    <input type="text" class="form-control" id="text" name="emailOrUsername" :value="old('emailOrUsername')" placeholder="Enter your email or username" autofocus />
                </div>

                <x-input-error :messages="$errors->get('emailOrUsername')" class="mt-2" />
                <div class="mb-3 form-password-toggle">
                    @if (Route::has('password.request'))
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="password">Password</label>
                            <a href="{{ route('password.request') }}">
                                <small>Forgot Password?</small>
                            </a>
                        </div>
                    @endif
                    <div class="input-group input-group-merge">
                        <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="password" />
                        <span class="cursor-pointer input-group-text"><i class="bx bx-hide"></i></span>
                    </div>

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
            </form>

            <p class="text-center">
                <span>New on our platform?</span>
                <a href="{{ route('register') }}">
                    <span>Create an account</span>
                </a>
            </p>
        </div>
    </div>

</x-auth-layout>
