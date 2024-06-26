<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        <link rel="stylesheet" href="{{('https://mlmw.lucasolving.com/css/app.css')}}">
        <title>Users</title>

    </head>
<body>
    <nav class="navbar fixed-top bg-light ps-3 pe-3">
        <div class="navbar-space">
            <div>
                <a class="navbar-brand" href="#"><img class="logo__navbar" src="{{ ('https://mlmw.lucasolving.com/images/logo.svg')}}" width="200"></a>
            </div>
            <div>
                <div class="d-flex justify-content-around">
                    <div class="user-perfil">
                        <img src="{{ ('https://mlmw.lucasolving.com/images/icon_user.png')}}" class="img-fluid">
                        Welcome
                    </div>
                    <div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                                <div class="offcanvas-header">
                                <img src="{{ URL ('https://mlmw.lucasolving.com/images/icon_user.png')}}" class="img-fluid">                            
                                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                                    Welcome
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
	                                    <li class="nav-item">
	                                        <a class="nav-link over-link {{ (request()->is('dashboard')) ? 'link-active' : '' }}" href="/dashboard">Dashboard</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link over-link {{ (request()->is('ventas')) ? 'link-active' : '' }}" href="/ventas">Ventas</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link over-link {{ (request()->is('compras')) ? 'link-active' : '' }}" href="/compras">Compras</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link over-link {{ (request()->is('logout')) ? 'link-active' : '' }}" href="/logout">Logout</a>
	                                    </li>
	                                    <li class="pt-5">
	                                        <form action="/logout" method="GET">
	                                            @csrf
	                                            <div class="d-grid gap-2">
	                                                <button class="btn btn-secondary lg button-active" type="submit">SALIR</button>
	                                            </div>
	                                        </form>
	                                    </li>
                                    </ul>                                    
	                                <ul class="pt-5 text-center">
	                                    <li class="nav-item" style="list-style: none;">
	                                        <h6 class="dashboard-title-contact nav-link">¿Dudas o consultas?</h6>
	                                        <p><b>WhatsApp:</b> +1 (777) 999-9999</p>
	                                        <p><b>Correo:</b> soporte@erp.us</p>
	                                    </li>
	                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
