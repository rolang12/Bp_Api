<link rel="shortcut icon" href="images/icono.png">
<link href="/dist/output.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>

<x-guest-layout>
    <x-jet-authentication-card>
        
        <x-slot name="logo">

            <svg aria-hidden="true"  focusable="false" data-prefix="fab" data-icon="artstation" class="mx-auto animate-pulse svg-inline--fa fa-artstation text-center h-20 w-20 fa-w-16  " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="white" d="M2 377.4l43 74.3A51.35 51.35 0 0 0 90.9 480h285.4l-59.2-102.6zM501.8 350L335.6 59.3A51.38 51.38 0 0 0 290.2 32h-88.4l257.3 447.6 40.7-70.5c1.9-3.2 21-29.7 2-59.1zM275 304.5l-115.5-200L44 304.5z"></path></svg>

            <!-- <x-jet-authentication-card-logo /> -->
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        @if ($errors->any())
            <div class=" z-10 mt-24 mb-5   ">
                <ul>
                    @foreach ($errors->all() as $error)

                        <li>
                            <div class="flex w-full my-2 max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                                <div class="flex items-center justify-center w-12 bg-red-500">
                                    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z" />
                                    </svg>
                                </div>

                                <div class="px-4 py-2 -mx-3">
                                    <div class="mx-3">
                                        <span class="font-semibold text-red-500 dark:text-red-400">Error</span>
                                        <p class="text-sm text-gray-600 dark:text-gray-200">{{ $error }}</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="countries_id" value="{{ __('Select your Country') }}" />
                <select class=" w-full p-3 rounded-lg bg-transparent text-white " name="countries_id" :value="old('countries_id')">
                    <option class="bg-transparent text-light text-base text-gray-700 p-4" value="1">Argentina </option>
                    <option class="bg-transparent text-light text-base text-gray-700 p-4" value="2">Chile </option>
                    <option class="bg-transparent text-light text-base text-gray-700 p-4" value="3">Colombia </option>
                    <option class="bg-transparent text-light text-base text-gray-700 p-4" value="4">Ecuador </option>
                    <option class="bg-transparent text-light text-base text-gray-700 p-4" value="5">México </option>
                    <option class="bg-transparent text-light text-base text-gray-700 p-4" value="6">Panamá</option>
                    <option class="bg-transparent text-light text-base text-gray-700 p-4" value="7">Perú </option>
                    <option class="bg-transparent text-light text-base text-gray-700 p-4" value="8">Paraguay </option>
                    <option class="bg-transparent text-light text-base text-gray-700 p-4" selected value="9">Other </option>
        
                </select>
            
            </div>

            <div class="mt-4">
                <x-jet-label for="photo"  }}" />
                <x-jet-input id="photo" class="block mt-1 w-full" type="file" name="photo"  />
            </div>




            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-300 hover:text-gray-100" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
