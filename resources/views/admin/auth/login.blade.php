@extends('admin.layouts.auth')

@section('title', 'Log in')

@section('contents')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('admin') }}"><b>Shopping</b>Kart</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="{{ url('admin/login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input class="form-control" name="email" type="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @if ($errors->has('email'))
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </div>
                    @endif
                    <div class="input-group mb-3">
                        <input class="form-control" name="password" type="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @if ($errors->has('password'))
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </div>
                    @endif
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button class="btn btn-primary btn-block" type="submit">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
@endsection
