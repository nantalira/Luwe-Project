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
                <img src="assets/img/burger.jpg" style="background-size:cover;" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5>Burger Bagor</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="assets/img/hotdog.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h5>Gelato Maman</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/salad.jpg" class="d-block w-100" alt="...">
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
    <div class="col">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card btn" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img src="assets/burger2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card btn" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img src="assets/ekrim2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card btn" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img src="assets/mie.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural
                            lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card btn" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img src="assets/eskrim.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card btn" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img src="assets/sate.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card btn" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img src="assets/satejagung.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
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
                <div class="cards">
                    <img src="assets/eskrim.png" alt="" srcset="">
                    <div class="details">
                        <h4>Caffe</h4>
                        <p>Caffe terdekat</p>
                        <ul class="social-media">
                            <li>
                                <a href="#"><i class="bi bi-geo-alt-fill"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="cards">
                    <img src="assets/eskrim.png" alt="" srcset="">
                    <div class="details">
                        <h4>Caffe</h4>
                        <p>Caffe terdekat</p>
                    </div>
                    <ul class="social-media">
                        <li>
                            <a href="#"><i class="bi bi-geo-alt-fill"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"></a>
                        </li>
                    </ul>
                </div>
                <div class="cards">
                    <img src="assets/eskrim.png" alt="" srcset="">
                    <div class="details">
                        <h4>Caffe</h4>
                        <p>Caffe terdekat</p>
                    </div>
                    <ul class="social-media">
                        <li>
                            <a href="#"><i class="bi bi-geo-alt-fill"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="cards">
                    <img src="assets/eskrim.png" alt="" srcset="">
                    <div class="details">
                        <h4>Caffe</h4>
                        <p>Caffe terdekat</p>
                    </div>
                    <ul class="social-media">
                        <li>
                            <a href="#"><i class="bi bi-geo-alt-fill"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>