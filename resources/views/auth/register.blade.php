@extends('master')
@section('title')
    Register
@endsection
@section('content')

    <div class="col-md-9">
        <div class="modal-dialog" style="margin-bottom:0">
            <div class="modal-content">
                <div class="panel-heading">
                    <h3 class="panel-title">Register</h3>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{url('/auth/register')}}">
                        {!! csrf_field() !!}
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" value="{{ old('name') }}" placeholder="Your Name" name="name" type="text" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" value="{{ old('email') }}" placeholder="Your Email" name="email" type="email" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control"  placeholder="Password" name="password" type="password">
                            </div>
                            <div class="form-group">

                                <input class="form-control"  placeholder="Confirm Password" name="password_confirmation" type="password">
                            </div>

                            <button  class="btn btn-sm btn-success">Register</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

