@extends('layouts.loginformadmin')

@section('content')
<div class="limiter">
		<div class="container-login100" style="background-image: url('frontend/login/images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Login Admin
                </span>
                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form p-b-33 p-t-5">
                        @csrf

					<div class="wrap-input100 validate-input" data-validate = "Enter Email">
						<input id="email" class="input100" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                         @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input id="password" class="input100" type="password" name="password" placeholder="Password">
                        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button type="submit" class="login100-form-btn">
							{{ __('Login') }}
						</button>
					</div>

                </form>
			</div>
		</div>
	</div>


@endsection
