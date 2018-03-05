@extends('master')
@section('title')
    Login
@endsection
@section('content')

<div class="col-md-9">
    <div class="modal-dialog" style="margin-bottom:0">
        <div class="modal-content">
            <div class="panel-heading">
                <h3 class="panel-title">Sign In</h3>
            </div>
            <div class="panel-body">
                <form method="POST" action="/auth/login">
                    {!! csrf_field() !!}
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" value="{{ old('email') }}" placeholder="E-mail" name="email" type="email" autofocus="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="password" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
                            </label>
                        </div>
                        <button  class="btn btn-sm btn-success">Login</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>






    @endsection