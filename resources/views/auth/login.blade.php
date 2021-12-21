@extends('Layouts.frontend')

@section('container')

<body class="login-page">
    <div class="container-fluid mx-auto">
        <div class="row justify-content-md-center">
            <div class="card-wrapper">
                <div class="card fat">
                @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <div class="card-body">
                        <h4 class="card-title">Login</h4>
                        <form form action="/login" method="post" class="my-login-validation" novalidate="">
                        @csrf   
                        <div class="form-group">
                                <label for="username">Username
                                </label>
                                <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" autofocus required>
                                @error('username')
                                <div class="invalid-feedback">
                                    username is required
                                </div>
                                @enderror 
                            </div>

                            <div class="form-group">
                                <label for="password">Password

                                </label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" autofocus required>
                            </div>
                            <div class="form-group">
								<a class="btn btn-primary btn-block" type="submit" value="login" href="/homeadmin">
									LOGIN
								</a>
							</div>
                            <div class="form-group">
                                <a href="/register" class="float-left">
                                    Sign Up </a>
                                <a href="/forget" class="float-right">
                                    Forgot Password? </a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

</body>

</html>