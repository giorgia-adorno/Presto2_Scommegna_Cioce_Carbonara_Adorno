<x-layout>
    <div class="auth-page">

        <div class="auth-card">

            <div class="text-center mb-4">
                <span class="section-label">{{ __('ui.welcomeBack') }}</span>
                <h1 class="auth-title">{{ __('ui.login') }}</h1>
                <div class="mx-auto mt-3" style="width:60px;height:3px;background:#d4a843;"></div>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

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

                <button type="submit" class="auth-button">{{ __('ui.login') }}</button>

                <div class="auth-link">
                    {{ __('ui.noAccount') }}
                    <a href="{{ route('register') }}">{{ __('ui.register') }}</a>
                </div>

            </form>

        </div>
    </div>
</x-layout>