@extends('layouts.app')
  @section('content')
  @section('title')
  Log In
  @endsection
    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1 class="text-center">Log In</h1>
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
                        <p class="mb-4">You aren't signed up? Then please <a class="blue" href="sign-up.html">Sign Up</a></p>

                        <!-- Log In Form -->
                        <form id="logInForm">
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="email" required>
                                <label class="label-control" for="email">Email</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="password" required>
                                <label class="label-control" for="password">Password</label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">Log In</button>
                            </div>
                        </form>
                        <!-- end of log in form -->

                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->

    @endsection