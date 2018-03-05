<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container-fluid">

<br>
    <br>
    <!-- Second navbar for sign in -->
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">Blog</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse-2">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{url('/')}}">Home</a></li>

                    @if (Auth::guest())
                    <li><a href="{{url('/auth/register')}}">Register</a></li>

                    <li>
                        <a class="btn btn-default btn-outline btn-circle"  data-toggle="collapse" href="#nav-collapse2" aria-expanded="false" aria-controls="nav-collapse2">Sign in</a>
                    </li>
                    @else

                        @if(Auth::user()->admin == 1)
                            <li><a href="{{url('/manage-articles')}}">Go to Dashboard</a></li>
                        @endif
                        <li class="dropdown">
                            <a class="cf" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">

                                <li><a href="{{ url('auth/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>

                            </ul>
                        </li>
                        @endif
                </ul>
                <div class="collapse nav navbar-nav nav-collapse" id="nav-collapse2">
                    <form class="navbar-form navbar-right form-inline" method="POST" role="form" action="{{url('/auth/login')}}">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label class="sr-only" for="Email">Email</label>
                            <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="Email" placeholder="Email" autofocus required />
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="Password">Password</label>
                            <input type="password" class="form-control" name="password" id="Password" placeholder="Password" required />
                        </div>
                        <button type="submit" class="btn btn-success">Sign in</button>
                    </form>
                </div>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav><!-- /.navbar -->

</div><!-- /.container-fluid -->