@extends('template')

@section('content')
<section class="hero hero-panel" style="background-image: url(img/cover/cover-register.jpg);">
    <div class="hero-bg"></div>
    <div class="container relative">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-none margin-auto">
                <div class="panel panel-default panel-login">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-users"></i> ...</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                            <div class="form-group input-icon-left">
                                <i class="fa fa-user"></i>
                                <input class="form-control" name="name" placeholder="Name" type="text" value="{{ old('name') }}">
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <div class="form-group input-icon-left">
                                <i class="fa fa-envelope"></i>
                                <input class="form-control" name="email" placeholder="Email" type="email" value="{{ old('email') }}">
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <div class="form-group input-icon-left">
                                <i class="fa fa-lock"></i>
                                <input class="form-control" name="password" placeholder="Password" type="password">
                            </div>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                            <div class="form-group input-icon-left">
                                <i class="fa fa-check"></i>
                                <input class="form-control" name="password_confirmation" placeholder="Repeat Password" type="password">
                            </div>

                            <input type="submit" class="btn btn-primary btn-block" value='Register'>

                            <div class="form-actions">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox" type="checkbox">
                                    <label for="checkbox">Accept terms and service.</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                        Already have an account? <a href="login.html">Sign In Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
