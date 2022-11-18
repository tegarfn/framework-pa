<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-
    icons@1.9.1/font/bootstrap-icons.css">

    <title>@yield('title')</title>
</head>

<body style="background-color: #E1FFB1;">
    <!-- JavaScript Bundle with Popper -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fs-2 fw-bold" href="#">TED Inventory</a>
        </div>
    </nav>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Login</h1>
        <div class="d-grid gap-2 col-2 mx-auto">
        </div>
        <div class="card" style="background-color: #C7F2A4;">
            <div class="card-body">
                @if(session('error'))
                <div class="alert alert-danger">
                    <b>Oops!</b> {{session('error')}}
                </div>
                @endif
                @if(session('success'))
                <div class="alert alert-succes">
                    <b>Yeay!</b> {{session('success')}}
                </div>
                @endif
                <form action="{{url('/action-login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" style="background-color: #FCFFB2" name="email" placeholder="Masukkan email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" style="background-color: #FCFFB2" name="password" placeholder="Masukkan Password" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-success me-2">Masuk</button>
                    </div>
                    <div class="mt-3">
                        <p>Belum Punya Akun? <a class="text-primary" href="/supplier_register">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
