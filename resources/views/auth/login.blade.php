@extends('layouts.app')

@section('content')

                    
                    <div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Login As Administrator</h2>
						</div>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
							<div class="select-role">
							
							</div>
							<div class="input-group custom">
								<input type="email" id="email"  name="email"  class="form-control @error('email') is-invalid @enderror form-control-lg" placeholder="Email">
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
								<input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror form-control-lg" placeholder="**********">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Remember</label>
									</div>
								</div>
								<div class="col-6">
                                @if (Route::has('password.request'))
                                   
                                    <div class="forgot-password"><a href="{{ route('password.request') }}">Forgot Password</a></div>

                                @endif  
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
									
                                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Sign In">
									</div>
									
								</div>
							</div>
						</form>
					</div>
@endsection


