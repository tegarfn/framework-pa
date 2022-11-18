
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
        <a class="navbar-brand fs-2 fw-bold">TED Inventory</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/admin">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('admin.baju')}}">Baju</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('admin.celana')}}">Celana</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('admin.sepatu')}}">Sepatu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ Auth::user() ? '/logout': '/login/admin'}}"
                    aria-current="page">{{ Auth::user() ? 'Logout' :'Login'}}
                </a>
            </li>
        </ul>
        </div>
    </div>
</nav>
