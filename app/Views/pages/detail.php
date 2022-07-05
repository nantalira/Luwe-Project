<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9b5d1544f3.js" crossorigin="anonymous"></script>
    <title>Detail</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="h text-center">Detail Warung</h1>
                <div class="ratio ratio-21x9">
                    <img src="../assets/img/warunk/<?= $warung['ft_makanan']; ?>" alt="">
                </div>
            </div>
            <hr class="border-primary mt-3">
            <div class="col">
                <h2 class="h"><?= $warung['nm_warung']; ?> <span class="badge bg-primary"><i class="fa-solid fa-star"></i>5</span></h2>
                <p><?= $warung['dc_warung']; ?></p>
            </div>
            <div class="col">
                <h2 class="h">Contact</h2>
                <ul class="list-group">
                    <li class="list-group-item">
                        <p><i class="fas fa-map-marker-alt"></i>
                            <span><?= $warung['alamat']; ?></span>
                        </p>
                        <p><i class="fa-solid fa-clock"></i>
                            <span>15.00-23.00</span>
                        </p>
                        <p><i class="fa-solid fa-address-book"></i>
                            <span>085742577817</span>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row row-cols-2">
            <div class="col">
                <h4>Best Seller Menu </h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <h5><?= $warung['nm_makanan']; ?></h5>
                        <p><?= $warung['caption']; ?></p>
                    </li>
                </ul>
            </div>
            <div class="col">
            </div>
        </div>
    </div>






    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
<?= $this->endSection(); ?>