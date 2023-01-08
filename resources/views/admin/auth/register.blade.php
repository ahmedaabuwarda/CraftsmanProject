@extends('layouts.registration')

@section('form')
    <div class="kt-login__signup">
        <div class="kt-login__head">
            <h3 class="kt-login__title">{{ __('admin.register') }}</h3>
            <div class="kt-login__desc">{{ __('admin.please') }}</div>
        </div>
        <form class="kt-login__form kt-form" method="POST" action="{{ route('admin.register') }}">
            @csrf

            <div class="input-group">
                <input id="profile_id" type="hidden" placeholder="{{ __('admin.profile_id') }}" class="form-control @error('profile_id') is-invalid @enderror" name="profile_id" value="1" required autocomplete="profile_id" autofocus>
                @error('profile_id')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="input-group">
                <input id="name" type="text" placeholder="{{ __('admin.name') }}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
            
            <div class="input-group">
                <input id="username" type="text" placeholder="{{ __('admin.username') }}" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                @error('username')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="input-group">
                <input id="email" type="email" placeholder="{{ __('admin.email') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="input-group">
                <input id="phone" type="text" placeholder="{{ __('admin.phone') }}" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                @error('phone')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="input-group">
                <input id="address" type="text" placeholder="{{ __('admin.address') }}" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                @error('address')
                    <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span>
                @enderror
            </div>

            <div class="input-group">
                <input id="password" type="password"  placeholder="{{ __('admin.password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="input-group">
                <input id="password-confirm" type="password" class="form-control" placeholder="{{ __('admin.confirmPassword') }}" name="password_confirmation" required autocomplete="password-confirm">
            </div>

            <div class="kt-login__actions">
                <button type="submit" class="btn btn-pill kt-login__btn-primary">{{ __('admin.signup') }}</button>
            </div>
        </form>
        <div>
            <span style="color: white">{{ __('admin.login') }}</span>
            <a href="{{ route('admin.login') }}"  class="kt-link kt-link--light kt-login__account-link">{{ __('admin.signin') }}</a>
        </div>
    </div>
@endsection