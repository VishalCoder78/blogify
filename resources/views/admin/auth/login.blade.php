<x-guest-layout>
    @vite('resources/css/app.css')

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <h2 class="text-center text-4xl font-semibold py-4">Admin Login</h2>

    <form method="POST" action="{{ route('admin/login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Admin Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        
        <div class="flex mt-4 justify-between">
            <div class="block">
                <label for="remember_me" class="inline-flex items-start">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            @if (Route::has('password.request'))
            <a class="text-end underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif
            
        </div>
        <button type="submit" class="w-full my-6 text-black border bg-indigo-600 bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Login</button>
        {{-- <p>Create new account <a href="register" class="text-indigo-600 font-semibold">Register</a></p> --}}
    </form>
</x-guest-layout>
