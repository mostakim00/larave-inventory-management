@extends('layouts.adminlayout')




<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Bracket Plus Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{ asset('backend') }}/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/css/bracket.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center ht-100v">
      <video id="headVideo" class="pos-absolute a-0 wd-100p ht-100p object-fit-cover" autoplay muted loop>
        <source src="{{ asset('backend') }}/videos/video1.mp4" type="video/mp4">
        <source src="{{ asset('backend') }}/videos/video1.ogv" type="video/ogg">
        <source src="{{ asset('backend') }}/videos/video1.webm" type="video/webm">
      </video><!-- /video -->
      <div class="overlay-body bg-black-7 d-flex align-items-center justify-content-center">
        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bg-black-6">
          <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">[</span> bracket <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
          <div class="tx-white-5 tx-center mg-b-60">The Admin Template For Perfectionist</div>

          <form action="{{ route('login') }}" method="POST">
              @csrf
              
                <!-- Email Address -->
            <div class="form-group">
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="form-control fc-outline-dark" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="form-control fc-outline-dark" placeholder="Enter Your Password"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>
                <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
                <button type="submit" class="btn btn-info btn-block">Sign In</button>
            
                <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <div class="mg-t-20">Not yet a member? <a href="{{ route('register') }}" class="tx-info">Sign Up</a></div>
                <a class="btn btn-info m-1 btn-sm" href="{{ route('auth.google.login') }}"><i class="fab fa-google">Login with google</i></a>
                <a class="btn btn-info m-1 btn-sm" href=""><i class="fab fa-facebook">Login with facebook</i></a>
                <a class="btn btn-info m-1 btn-sm" href=""><i class="fab fa-linkedin">Login with Linkedin</i></a>
            </div>            
          </form>
        </div><!-- login-wrapper -->
      </div><!-- overlay-body -->
    </div><!-- d-flex -->

    <script src="{{ asset('backend') }}/lib/jquery/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="{{ asset('backend') }}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
      $(function(){
        'use strict';

        // Check if video can play, and play it
        var video = document.getElementById('headVideo');
        video.addEventListener('canplay', function() {
          video.play();
        });

      });
    </script>

  </body>
</html>
