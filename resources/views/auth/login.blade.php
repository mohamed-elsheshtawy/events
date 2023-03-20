<x-guest-layout>
    <div class="main-bg">
        <div class="login-container text-c animated flipInX">
            <div>
                <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
            </div>
            <h3 class="text-whitesmoke">Sign In Dashboard</h3>
            <p class="text-whitesmoke">Sign In</p>
            <div class="container-content">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" class="margin-t" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <div class="form-group">
                            <x-input-label for="email" :value="__('Email')" />
                            <input type="email" id="email" class="block mt-1 w-full form-control" name="email" :value="old('email')" required autofocus autocomplete="email" placeholder=" Email" />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4 form-group">
                        <x-input-label for="password" :value="__('Password')" />

                        <input id="password" class="block mt-1 w-full form-control" type="password" name="password" placeholder="*****" required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <button type="submit" class="form-button button-l margin-b form-control">{{ __('Log in') }}</button>

            </div>
            <!-- Remember Me -->
            </form>
           
        </div>
    </div>
    </div>

</x-guest-layout>


<style>
    label{
        color: #fff !important;
        text-align: left !important;
    }
    .dark:text-red-400{
        color: red !important;
    } 
</style>

