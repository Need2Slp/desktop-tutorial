<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/icon/favicon.png">
    <title>Menu | kedai poligon</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light py-4">
    <div class="container">
        <a class="navbar-brand mx-auto" href="index.php">kedai poligon</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item me-3">
                    <a class="nav-link" href="menu-ramen.php">Menu</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="promo.php">Promo</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h1 class="promo-title my-4">Menu</h1>
    <div class="row">
        <?php
        include 'config.php';
        $menu = ("select * from menu order by id asc");

        $dewan1 = $conn->prepare($menu);
        $dewan1->execute();
        $res1 = $dewan1->get_result();
        while ($row = $res1->fetch_assoc()) {
            $id = $row["id"];
            $menu = $row["menu"];
            $harga = number_format($row["harga"],2,',','.');
            $deskripsi = $row["deskripsi"];

            ?>
            <form action="" method="post" class="col-xl-3 col-md-4 col-sm-6 col-xs-12 py-2">
                <div class="card h-100 py-4">
                    <img class="menu-img w-100" src="assets/img/menu/<?php echo $row['img_menu']; ?>">

                    <div class="text-center mt-3">
                        <h5 class="menu-title mb-1"><?php echo $menu; ?></h5>
                        <a class="card-text">details menu</a>
                    </div>

                    <div class="card-body mt-3">
                <p class="menu-desc card-text" style="text-align: left;"><?php echo $deskripsi; ?></p>
            </div>

                    <div class="">
                        <p class="price mb-0 mt-3">IDR <?php echo $harga; ?></p>
                        <input class="btn btn-primary" type="submit" value="Add Item" >
                        <input type="number" name="qty" class="mb-2 mt-2" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
                    </div>

                </div>
            </form>
        <?php } ?>

    </div>
</div>

<section class="footer">
    <div class="container">
        <footer class="row row-cols-4 py-5 mt-4">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <a href="index.html" class="navbar-brand d-flex align-items-center mb-3 d-inline-flex">kedai poligon</a>
                <p class="desc text-justify">Nikmati Jajanan & Sarapan Lezat di Kedai Poligon, Surga Kuliner Pilihan di Palembang!</p>
            </div>

            <div class="col-xl-1 col-lg-1 col-md-0 col-sm-0"></div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <h5 class="nav-col mb-3">Social Media</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 d-inline-flex">Twitter</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 d-inline-flex">Instagram</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 d-inline-flex">Facebook</a></li>
                </ul>
            </div>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <h5 class="nav-col mb-3">Our Links</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 d-inline-flex">Home</a></li>
                    <li class="nav-item mb-2"><a href="menu.php" class="nav-link p-0 d-inline-flex">Menu</a></li>
                    <li class="nav-item mb-2"><a href="promo.php" class="nav-link p-0 d-inline-flex">Promo</a></li>
                    <li class="nav-item mb-2"><a href="login.php" class="nav-link p-0 d-inline-flex">Login</a></li>
                </ul>
            </div>
        </footer>
    </div>
</section>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.js" charset="utf-8"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="js/script.js"></script>
</body>
</html>