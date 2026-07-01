<x-layout>
    <div class="auth-page">

        <div class="auth-card">

            <div class="text-center mb-4">
                <span class="section-label">{{ __('ui.newAccount') }}</span>
                <h1 class="auth-title">{{ __('ui.register') }}</h1>
                <div class="mx-auto mt-3" style="width:60px;height:3px;background:#d4a843;"></div>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                {{-- NAME --}}
                <div class="mb-3">
                    <label class="auth-label">{{ __('ui.name') }}</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="auth-input">

                    @error('name')
                        <div class="auth-error">{{ $message }}</div>
                    @enderror
                </div>

                {{-- EMAIL --}}
                <div class="mb-3">
                    <label class="auth-label">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="auth-input">

                    @error('email')
                        <div class="auth-error">{{ $message }}</div>
                    @enderror
                </div>

                {{-- PASSWORD --}}
                <div class="mb-3">
                    <label class="auth-label">Password</label>
                    <input type="password" name="password" class="auth-input">

                    @error('password')
                        <div class="auth-error">{{ $message }}</div>
                    @enderror
                </div>

                {{-- CONFIRM PASSWORD --}}
                <div class="mb-3">
                    <label class="auth-label">{{ __('ui.confirmPassword') }}</label>
                    <input type="password" name="password_confirmation" class="auth-input">
                </div>

                <button type="submit" class="auth-button">{{ __('ui.register') }}</button>

                <div class="auth-link">
                    {{ __('ui.alreadyAccount') }}
                    <a href="{{ route('login') }}">{{ __('ui.login') }}</a>
                </div>

            </form>

        </div>
    </div>
</x-layout>