<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aplicando Web Modular</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style> html,body {  height: 100%;}</style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
    <div class="d-flex w-50 order-0">
        <a class="navbar-brand mr-1" href="/">Aplicando Web Modular </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="?page=index">Inicio<span class="sr-only">HOME</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=pagina2">Indicaciones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=pagina3">Definicion</a>
            </li>
        </ul>
    </div>   
</nav>