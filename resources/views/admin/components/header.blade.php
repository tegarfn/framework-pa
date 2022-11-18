
    <div class="container">
        <header>
            <div class="px-3 py-2 text-bg-dark">
                <div class="container">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <a href="/"
                            class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                                <use xlink:href="#bootstrap"></use>
                            </svg>
                        </a>

                        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                            <li>
                                <a href="{{route('admin.home')}}" class="nav-link text-secondary">
                                    <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                        <use xlink:href="#home"></use>
                                    </svg>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.baju')}}" class="nav-link text-white">
                                    <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                        <use xlink:href="#speedometer2"></use>
                                    </svg>
                                    Baju
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.celana')}}" class="nav-link text-white">
                                    <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                        <use xlink:href="#table"></use>
                                    </svg>
                                    Celana
                                </a>
                            </li>
                            <li>
                                <a href="{{route('admin.sepatu')}}" class="nav-link text-white">
                                    <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                        <use xlink:href="#grid"></use>
                                    </svg>
                                    Sepatu
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="px-3 py-2 border-bottom mb-3">
                <div class="container d-flex flex-wrap justify-content-end">
                    {{-- <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
                        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form> --}}
                    {{-- <div class="text-end">
                        <button type="button" class="btn btn-light text-dark me-2"><a
                                href="{{ Auth::user() ? '/logout' : '/supplier_login' }}" class="nav-link active"
                                aria-current="page">{{ Auth::user() ? 'Logout' : 'Login' }}</a></button>
                    </div> --}}
                </div>
            </div>
        </header>
