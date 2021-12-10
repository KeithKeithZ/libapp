<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Admin Login Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    </head>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">User Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/BookList">BookList</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/adminLogin">Admin Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                    <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img
                        src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/img1.jpg"
                        alt="login form"
                        class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
                    />
                    </div>
                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">

                        <form>

                        <div class="d-flex align-items-center mb-3 pb-1">
                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                            <span class="h1 fw-bold mb-0">Logo</span>
                        </div>

                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your Admin Account</h5>

                        <div class="form-outline mb-4">
                            <input type="text" id="admin" class="form-control form-control-lg" />
                            <label class="form-label" for="form2Example17">Username</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="psw" class="form-control form-control-lg" />
                            <label class="form-label" for="form2Example27">Password</label>
                        </div>

                        <div class="pt-1 mb-4">
                            <button class="btn btn-dark btn-lg btn-block" type="button" onclick='adminLogin()'>Login</button>
                        </div>
                        </form>

                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    
</html>