@extends('layouts.app')

@section('title', 'Log In')

@section('login', 'login')

@section('content')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <strong>
                    Sign In
                </strong>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {!! csrf_field() !!}
                    <div class="form-group{{ $errors->has('email_address') ? ' has-error' : '' }}">
                        <label class="col-sm-2 control-label">
                            Email Address
                        </label>
                        <div class="col-sm-10">

                            <input type="email" class="form-control" name="email_address"
                                   placeholder="user.name@domain.com" value="{{ old('email_address') }}" required>

                            @if ($errors->has('email_address'))
                                <span class="help-block error">
                                        <strong>{{ $errors->first('email_address') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="col-sm-2 control-label">
                            Password
                        </label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" pattern=".{6,}" placeholder="minimum 6 characters" required>

                            @if ($errors->has('password'))
                                <span class="help-block error">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10" align="right">
                            <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your
                                Password?</a>
                            <button type="submit" class="btn btn-primary"> Log In</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="panel-footer" align="center">
                <strong>
                    <em>
                        Yet Unregistered?
                        <a href="{{ url('/register') }}">
                            Register Now!
                        </a>
                    </em>
                </strong>
            </div>
        </div>
    </div>
@endsection
