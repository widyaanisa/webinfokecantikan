@extends('Layouts.frontend')

@section('container')

<body class="login-page">
    <div class="container-fluid mx-auto">
        <div class="row justify-content-md-center">
            <div class="card-wrapper">
                <div class="card fat">
                    <div class="card-body">
                        @csrf
                        <h4 class="card-title">Sign Up</h4>
                        <form method="post" action="/register-user">
                        @csrf    
                        <div class="form-group">
                                <label for="nama">Nama
                                </label>
                                <input id="nama" type="nama" class="form-control @error('nama')is-invalid @enderror" name="nama" placeholder="nama" required
                                    autofocus>
                                @error('nama')
                                <div class="invalid-feedback">
                                    Please choose a username</div>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="domisili">Domisili
                                </label>
                                <input id="domisili" type="domisili" class="form-control" name="domisili" value="" required
                                    autofocus>
                            </div>
                            <div class="form-group">
                                <label for="domisili">Tanggal lahir
                                </label>
                                <input id="date" type="date" class="form-control" name="date" value="" required
                                    autofocus>
                            </div>
                            <div class="form-group">
                                <label for="email">Email
                                </label>
                                <input id="email" type="email" class="form-control" name="email" value="" required
                                    autofocus>
                            </div>
                            <div class="form-group">
                                <label for="username">Username
                                </label>
                                <input id="username" type="username" class="form-control" name="username" value="" required
                                    autofocus>
                                <div class="invalid-feedback">
                                    Username is invalid
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password">Password
                                </label>
                                <input id="password" type="password" class="form-control" name="password" required
                                    data-eye>
                                <div class="invalid-feedback">
                                    Password is required
                                </div>
</div>

                                <div class="form-group">
								<a class="btn btn-primary btn-block" type="submit" value="login" href="/homeuser">
									Registrasi
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