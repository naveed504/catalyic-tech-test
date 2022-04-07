@extends('layouts.app')

@section('content')
<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Reset Password Master Tailor</h2>
						</div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

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
                       

                       

                        <div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" >  {{ __('Send Password Reset Link') }}</button>
									</div>
									
								</div>
							</div>
                    </form>
                
</div>
@endsection
