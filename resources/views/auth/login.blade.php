@extends('layout')

@section('content')
    <!-- BEGIN LOGIN SECTION -->
    <section class="section-account">
        <div class="img-backdrop" style="background-image: url('/img/prison-wall.jpg')"></div>
        <div class="spacer"></div>
        <div class="card contain-sm style-transparent">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <br/>
                        <span class="text-lg text-bold text-primary">Prison Management System</span>
                        <br/><br/>
                        <form class="form floating-label" action="{{ url('/auth/login') }}" accept-charset="utf-8" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="username" name="email">
                                <label for="username">Username</label>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password">
                                <label for="password">Password</label>
                                <p class="help-block"><a href="#">Forgotten?</a></p>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-xs-6 text-left">
                                    <div class="checkbox checkbox-inline checkbox-styled">
                                        <label>
                                            <input type="checkbox" name="remember"> <span>Remember me</span>
                                        </label>
                                    </div>
                                </div><!--end .col -->
                                <div class="col-xs-6 text-right">
                                    <button class="btn btn-primary btn-raised" type="submit">Login</button>
                                </div><!--end .col -->
                            </div><!--end .row -->
                        </form>
                    </div><!--end .col -->
                </div><!--end .row -->
            </div><!--end .card-body -->
        </div><!--end .card -->
    </section>
@endsection
