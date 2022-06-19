<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!-- main -->
<!-- Carousel Start -->
<section id="home-page">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="assets/img/carousel/burger.jpg" style="background-size:cover;" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5>Burger Bagor</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="assets/img/carousel/hotdog.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5>Gelato Maman</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/carousel/salad.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5>Mie Enak</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<!-- Carousel End -->

<!-- Explore Section -->
<section id="explore-page" class="container bd-gutter mt-5 mb-5">
    <hr class="solid">
    <h2>Explore Makanan</h2>
    <div class="col mt-3">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach($makanan as $mkn) : ?>
            <div class="col">
                <div class="card btn" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img src="assets/img/food/<?php echo $mkn['foto_makanan']?>" class="card-img-top" alt="..." style="height: 300px; width:100%; object-fit:cover">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $mkn['nama_makanan'] ?></h5>
                        <p class="card-text"><?php echo $mkn['caption'] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section> <!-- Explore Section End -->

<!-- section warung -->
<section id="warung" class="container bd-gutter mt-5 mb-5">
    <hr class="solid">
    <h2>Warung</h2>
    <div class="col">
        <div class="row">
            <div class="d-flex flex-wrap gap-3 justify-content-center">
                <?php foreach($warung as $wrg) : ?>
                <div class="cards">
                    <img src="assets/img/warunk/<?= $wrg['foto_warung']; ?>" alt="" srcset="">
                    <div class="details">
                        <h4><?= $wrg['nama_warung']; ?></h4>
                        <p><?= $wrg['jenis_warung']; ?></p>
                        <ul class="social-media">
                            <li>
                                <a href="#" style="text-decoration: none;"><i class="text-white bi bi-geo-alt-fill"> <?= $wrg['lokasi']; ?></i></a>
                            </li>
                            <li>
                                <a href="#" style="text-decoration: none;"><i class="text-white bi bi-instagram"> <?= $wrg['instagram']; ?></i></a>
                            </li>
                            <li>
                                <a href="#" style="text-decoration: none;"><i class="text-white bi bi-whatsapp"> <?= $wrg['telp']; ?></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>