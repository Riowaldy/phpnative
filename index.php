<?php include 'view/layout/headerindex.php'; ?>
<link rel="stylesheet" href="public/css/index.css">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">𝕵𝕮</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="view/data.php">Akses Data <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="slide">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="public/img/1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Cupang Rare</h5>
                    <p>Memiliki kekuatan membaca pikiran lawan.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="public/img/2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Cupang Epic</h5>
                    <p>Memiliki kekuatan meludahkan racun mematikan.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="public/img/3.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Cupang Legendary</h5>
                    <p>Memiliki kekuatan membunuh lawan dalam sekali putaran.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
    <div class="judul">
        <h3>𝕵𝖚𝖗𝖆𝖌𝖆𝖓 𝕮𝖚𝖕𝖆𝖓𝖌</h3>
    </div>
</div>

<?php include 'view/layout/footerindex.php'; ?>
<script src="public/js/index.js"></script>