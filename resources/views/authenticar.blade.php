@extends('layouts.fullLayoutMaster')

@section('title','Login')

@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/login.css')}}">
@endsection

@section('content')
<div id="login-page" class="row">
    <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
        <form class="login-form">
            <div class="row">
                <div class="input-field col s12">
                    <h5 class="ml-4">Inicar Sesi&oacute;n</h5>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="material-icons prefix pt-2">person_outline</i>
                    <input id="username" type="text">
                    <label for="username" class="center-align">Usuario</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="material-icons prefix pt-2">lock_outline</i>
                    <input id="password" type="password">
                    <label for="password">Contrase&ntilde;a</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12 ml-2 mt-1">
                    <p>
                        <label>
                            <input type="checkbox" />
                            <span>{{__('Remember me')}}</span>
                        </label>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <a href="{{asset('/')}}"
                        class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">{{ __('Login') }}</a>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6 m6 l6">
                    <p class="margin medium-small"><a href="{{asset('user-register')}}">{{ __('Register') }}</a></p>
                </div>
                <div class="input-field col s6 m6 l6">
                    <p class="margin right-align medium-small"><a href="{{asset('user-forgot-password')}}">{{ __('Forgot Your Password?') }}</a>
                    </p>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
