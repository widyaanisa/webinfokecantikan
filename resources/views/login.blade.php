@extends('Layouts.frontend')

    @section('container')
<body class="login-page">
	<div class="container-fluid mx-auto">
		<div class="row justify-content-md-center">
			<div class="card-wrapper">
				<div class="card fat">
					<div class="card-body">
						<h4 class="card-title">Login</h4>
						<form method="POST" class="my-login-validation" novalidate="">
							<div class="form-group">
								<label for="username">Username</label>
								<input id="username" type="username" class="form-control" name="email" value="" required
									autofocus>
								<div class="invalid-feedback">
									Username is invalid
								</div>
							</div>

							<div class="form-group">
								<label for="password">Password
									<a href="forgot.html" class="float-right">
										Forgot Password? </a>
								</label>
								<input id="password" type="password" class="form-control" name="password" required
									data-eye>
								<div class="invalid-feedback">
									Password is required
								</div>
							</div>

							<div class="form-group">
								<a class="btn btn-primary btn-block" type="submit" value="login" href="/dashboard">
									LOGIN
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