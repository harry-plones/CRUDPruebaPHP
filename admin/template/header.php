<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php $url = "http://" . $_SERVER['HTTP_HOST'] . "/CRUDPruebaPHP" ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav me-auto mb-lg-2 mt-lg-2">
                <a class="nav-item nav-link" href="#">Admin</a>
                <a class="nav-item nav-link" href="#">Home</a>
                <a class="nav-item nav-link" href="#">books</a>
                <a class="nav-item nav-link" href="<?php echo $url; ?>">Web Site</a>
                <a class="nav-item nav-link" href="#">Log Out</a>
            </ul>
        </div>
    </nav>

    <div class="container">
        <br><br>
        <div class="row">