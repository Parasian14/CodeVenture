<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')

    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.3.2-dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-icons-1.10.5/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/svg.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/style.css') }}">
    @yield('css')
</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="learning-path" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8V1z" />
            <path
                d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
            <path
                d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
        </symbol>
        <symbol id="materi" viewBox="0 0 16 16">
            <path
                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.028l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
        </symbol>
        <symbol id="akun" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </symbol>
        <symbol id="tiktok" viewBox="0 0 16 16">
            <path
                d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
        </symbol>
        <symbol id="twitter" viewBox="0 0 16 16">
            <path
                d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z" />
        </symbol>
        <symbol id="instagram" viewBox="0 0 16 16">
            <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
        </symbol>
        <symbol id="telephone" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
        </symbol>
        <symbol id="email" viewBox="0 0 16 16">
            <path
                d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z" />
            <path
                d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z" />
        </symbol>
    </svg>

    <nav class="navbar navbar-expand-md navbar-dark bg-warning bg-opacity-75 sticky-lg-top">
        <div class="container-xxl">
            <a href="/" class="navbar-brand">
                <span class="fw-bold text-light">
                    <img src="{{ asset('assets/Resources/logo.png') }}" height="40px">
                    Codeventure
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end align-content-center" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/learning_path">
                            <svg class="bi" width="28" height="28">
                                <use xlink:href="#learning-path" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/progress">
                            <svg class="bi" width="28" height="28">
                                <use xlink:href="#materi" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg class="bi" width="28" height="28">
                                <use xlink:href="#akun" />
                            </svg>
                        </a>
                        <ul class="dropdown-menu">
                            @auth 
                                <li><a class="dropdown-item" href="{{ Auth::User()->admin==1?route('admin'):route('profil.edit') }}">{{ Auth::User()->admin==1?'Dashboard':'Profil' }}</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>                                             
                                    <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                </li>
                            @else
                                <li><a class="dropdown-item" href="/register">Register</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/login">Log In</a></li>
                            @endauth
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <div class="container" id="kontak">
        <footer class="py-5">
            <div class="row">
                <div class="col-md-4 mb-1">
                    <ul class="nav d-flex justify-content-center justify-content-md-start">
                        <li class="nav-item mb-2"><img src="{{ asset('assets/Resources/logo.png') }}" alt="Codeveture" height="200"></li>
                    </ul>
                </div>

                <div class="col-md-4 mb-1">
                    <h2 class="text-center text-dark">Kelompok 9</h2>
                    <p class="text-center text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem
                        veritatis
                        commodi eveniet repellat, ab
                        consequatur non reprehenderit delectus esse quo laborum, minus natus suscipit aliquam nobis
                        saepe, dolores
                        alias qui?</p>
                </div>

                <div class="col-md-3 offset-md-1 mb-1 d-none d-md-inline-block">
                    <h3 class="text-end text-dark">Hubungi Kami<h3>
                            <ul class="list-unstyled d-flex justify-content-end">
                                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="28"
                                            height="28">
                                            <use xlink:href="#telephone" />
                                        </svg></a></li>
                                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="28"
                                            height="28">
                                            <use xlink:href="#email" />
                                        </svg></a></li>
                            </ul>
                            <h3 class="text-end text-dark">Sosial Media Kami<h3>
                                    <ul class="list-unstyled d-flex justify-content-end">
                                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi"
                                                    width="28" height="28">
                                                    <use xlink:href="#tiktok" />
                                                </svg></a></li>
                                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi"
                                                    width="28" height="28">
                                                    <use xlink:href="#twitter" />
                                                </svg></a></li>
                                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi"
                                                    width="28" height="28">
                                                    <use xlink:href="#instagram" />
                                                </svg></a></li>
                                    </ul>
                </div>
                <div class="d-inline-block d-md-none">
                    <h2 class="text-center text-dark">Kontak & Sosial Media Kami</h2>
                </div>
                <div class="d-flex d-inline-block d-md-none flex-sm-row justify-content-around">
                    <ul class="list-unstyled d-flex justify-content-start">
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="16" height="16">
                                    <use xlink:href="#telephone" />
                                </svg></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="16" height="16">
                                    <use xlink:href="#email" />
                                </svg></a></li>
                    </ul>
                    <ul class="list-unstyled d-flex justify-content-end">
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="16" height="16">
                                    <use xlink:href="#tiktok" />
                                </svg></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="16" height="16">
                                    <use xlink:href="#twitter" />
                                </svg></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="16" height="16">
                                    <use xlink:href="#instagram" />
                                </svg></a></li>
                    </ul>
                </div>

            </div>
            <div
                class="d-flex flex-sm-column flex-md-row justify-content-center justify-content-lg-between align-items-center py-4 my-4 border-top">
                <p class="text-dark">&copy; Kelompok 9 RPL 2023.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a href="#">Kebijakan Privasi</a></li>
                    <li class="ms-3"><a href="#">Syarat dan Ketentuan</a></li>
                    <li class="ms-3"><a href="#">Distribusi Data</a></li>
                </ul>
            </div>
        </footer>
    </div>

    <script src="{{ asset('assets/bootstrap-5.3.2-dist/js/bootstrap.bundle.js') }}"></script>
    @yield('css')
</body>

</html>