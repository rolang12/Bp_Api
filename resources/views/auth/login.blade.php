
<link rel="shortcut icon" href="images/icono.png">
<script src="https://cdn.tailwindcss.com"></script>

<x-guest-layout class="container"  >
    <x-jet-authentication-card>
        <x-slot name="logo">
            <svg aria-hidden="true"  focusable="false" data-prefix="fab" data-icon="artstation" class="mx-auto text-white animate-pulse svg-inline--fa fa-artstation text-center h-20 w-20 fa-w-16  " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="white" d="M2 377.4l43 74.3A51.35 51.35 0 0 0 90.9 480h285.4l-59.2-102.6zM501.8 350L335.6 59.3A51.38 51.38 0 0 0 290.2 32h-88.4l257.3 447.6 40.7-70.5c1.9-3.2 21-29.7 2-59.1zM275 304.5l-115.5-200L44 304.5z"></path></svg>

        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST"  action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" class="text-white text-base"  value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block bg-transparent text-white mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" class="text-white text-base"  value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 bg-transparent w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me"  class="flex items-center ">
                    <x-jet-checkbox id="remember_me" name="remember" class="text-white text-base"  />
                    <span class="ml-2 text-base text-gray-200">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-300 hover:text-gray-100" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
