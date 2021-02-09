@extends('layouts.app')
@section('content')
	<section class="login_box_area section-margin" style="margin: 45px 0;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>
						<form class="row login_form" method="POST" action="{{ route('login') }}" id="contactForm" >
                            @csrf
                            <div class="col-md-12 form-group">
								<input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="col-md-12 form-group">
								<input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
									<label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="button button-login w-100">Log In</button>
								@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection