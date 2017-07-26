@extends('template')

@section('content')
<section class="hero hero-panel" style="background-image: url(img/cover/cover-login.jpg);">
            <div class="hero-bg"></div>
            <div class="container relative">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 pull-none margin-auto">
                        <div class="panel panel-default panel-login">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-user"></i> ...</h3>
                            </div>
                            <div class="panel-body">
                                <form method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    <div class="form-group input-icon-left">
                                        <i class="fa fa-user"></i>
                                        <input class="form-control" name="email" placeholder="Email" type="text" value="{{ old('email') }}">
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <div class="form-group input-icon-left">
                                        <i class="fa fa-lock"></i>
                                        <input class="form-control" name="password" placeholder="Password" type="password" >
                                    </div>
                                    <input type="submit" class="btn btn-primary btn-block" value='Sign In'>

                                    <div class="form-actions">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox" type="checkbox">
                                            <label for="checkbox">Remember me</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">
                                Don't have Gameforest account? <a href="register.html">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
