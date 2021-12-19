@extends('Layouts.frontend')

@section('container')

<body class="login-page">
    <div class="container-fluid mx-auto">
        <div class="row justify-content-md-center">
            <div class="card-wrapper">
                <div class="card fat">
                    <div class="card-body">
                        <h4 class="card-title">Forget Password</h4>
                        <form method="POST" class="my-login-validation" novalidate="">
                            <div class="form-group">
                                <label for="username">Username
                                </label>
                                <input id="username" type="username" class="form-control" name="email" value="" required
                                    autofocus>
                                <div class="invalid-feedback">
                                    Username
                                </div>
                            </div>


                            <div class="form-group">
                                <a class="btn btn-danger btn-block" type="submit" value="forgetp" href="homeadmin">
                                    Forget Password
                                </a>
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