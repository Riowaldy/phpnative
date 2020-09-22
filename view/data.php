<?php include 'layout/header.php'; ?>
<link rel="stylesheet" href="../public/css/data.css">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">𝕵𝕮</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="data.php">Akses Data <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="col-md-12">
        <table id="cupang" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php include "../model/readCupang.php" ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'layout/footer.php'; ?>
<script src="../controller/cupang.js"></script>

        