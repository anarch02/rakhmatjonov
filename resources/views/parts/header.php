<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rakhmatjonov.uz</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- Link bootstrap -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">

    <!-- Link bootstraps icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
        <header class="d-flex flex-wrap justify-content-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">PHP</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link <?= uriIs('/') ?>" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="/about" class="nav-link">About me</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
            </ul>

            <!-- <ul class="nav">
                <li class="nav-item">
                    <a href="#" class="btn btn-warning">Login</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-secondary">Sing Up</a>
                </li>
            </ul> -->
        </header>
    </div>