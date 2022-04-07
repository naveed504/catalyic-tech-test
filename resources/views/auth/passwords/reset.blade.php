@extends('layouts.app')

@section('content')
<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Reset Password</h2>
						</div>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                            <div class="input-group custom">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required readonly autocomplete="email" autofocus>
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="input-group custom">
								<input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror form-control-lg" placeholder="New Password">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
                            
                            <div class="input-group custom">
								<input id="password-confirm" name="password_confirmation" type="password" class="form-control @error('password') is-invalid @enderror form-control-lg" placeholder="Confirm Password">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
                               
							</div>

                       

                            <div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
									
                                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Reset Password">
									</div>
									
								</div>
							</div>
                    </form>
               
</div>
@endsection
