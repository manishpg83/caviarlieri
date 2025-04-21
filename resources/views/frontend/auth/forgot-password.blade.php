@extends('frontend.layouts.app')

@section('title', 'Home | Swiss Caviarlieri')
@section('header', 'Home | Swiss Caviarlieri')

@section('content')
<div class="wrapper-fixed">
    <div class="banner">
       <div class="table-cell">
          <div class="v-align">
             Experience Swiss Cell Therapy
          </div>
       </div>
    </div>
    <form method="POST" id="registration" action="{{ route('login') }}">
       @csrf
       <div class="form-bg">
          <div class="container login-form">
             <div class="con-small frm">
                <div class="header-form">
                   Login for Returning Customers
                </div>
                <div class="form-item">
                   <div class="note notepopup" style="display: none;">
                      <h4>For Our Returning Customers,</h4>
                      Please note that we have upgraded our system. Your registered Email will now be your login ID. Please click on 'forgot password' to reset your password. We apologise for the inconvenience caused.
                      <span class="closeNa">×</span>
                   </div>
                   <div class="">
                      <div class="row">
                         <div class="col-md-12 col-xs-12 form-group">
                            <div class="input">
                               <input type="email" data-validation="required" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
                               @error('email')
                                   <span class="text-danger">{{ $message }}</span>
                               @enderror
                            </div>
                         </div>
                         <div class="col-md-12 col-xs-12 form-group">
                            <div class="input">
                               <input type="password" data-validation="required" name="password" id="password" placeholder="Password">
                               @error('password')
                                   <span class="text-danger">{{ $message }}</span>
                               @enderror
                            </div>
                         </div>
                         <div class="col-md-12 col-xs-12 form-group">
                            <div class="atr">
                               <div class="row">
                                  <div class="col-sm-6 remember">
                                     <input type="checkbox" id="test2" checked="checked">
                                     <label for="test2">Remember Me</label>
                                  </div>

                               </div>
                            </div>
                         </div>
                         <div class="col-md-12 col-xs-12">
                            <div class="input">
                               <button type="submit" name="submit" class="join">
                               SIGN IN
                               </button>
                               <button class="join grey">
                               <a href="{{ route('register') }}">SIGN UP FOR NEW ACCOUNT</a>
                               </button>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </form>
 </div>
@endsection





    <!-- Content -->
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-6">
                <div class="card">
                    <div class="card-body">
                        <div class="app-brand justify-content-center mb-6">
                            <a href="index.html" class="app-brand-link">
                                <span class="app-brand-text demo text-heading fw-bold"></span><img
                                    src="{{ asset('/admin/assets/img/caviarlieri-logo.png') }}"
                                    alt="Swiss Caviarlieri" width="auto" height="40">
                            </a>
                        </div>
                        <h4 class="mb-1">Welcome to Swiss Caviarlieri! 👋</h4>
                        <p class="mb-6">Please sign-in to your account and start the adventure</p>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if ($errors->has('email'))
                            <div class="alert alert-danger">
                                {{ $errors->first('email') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}" id="passwordResetForm"
                            onsubmit="showLoader()">
                            @csrf
                            <div class="mb-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter your email or username" autofocus required />
                            </div>
                            <div class="mb-6">
                                <button class="btn btn-primary d-grid w-100" type="submit" id="submitBtn">Send Password
                                    Reset Link</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
