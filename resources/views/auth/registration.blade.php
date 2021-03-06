@extends('layouts.app')
  @section('content')
  @section('title')
  Sign Up
  @endsection
    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1 class="text-center">Sign Up</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
    
    <!-- Basic -->
    <div class="ex-form-1 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="text-box mt-5 mb-5">
                        <p class="mb-4">Fill out the form below to sign up. Already signed up? Then just <a class="blue" href="/login">Log In</a></p>
                        <!-- Sign Up Form -->
                        <form id="signUpForm" action="{{ route('register.custom') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="email" name="email" required>
                                <label class="label-control" for="email">Email</label>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="name" name="name" required>
                                <label class="label-control" for="name">Name</label>
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control-input" id="password" name="password" required>
                                <label class="label-control" for="password">Password</label>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox" id="terms" value="Agreed-to-Terms" required>I agree with the site's stated <a href="russian.html">Privacy Policy</a> and <a href="terms.html">Terms & Conditions</a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">Sign Up</button>
                            </div>
                        </form>
                        <!-- end of sign up form -->

                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->

    @endsection