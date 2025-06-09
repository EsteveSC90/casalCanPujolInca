<?php
    include_once 'header.php';
?>


			<!-- start banner Area -->
            <section class="capa">
                <div class="slider-container"">
                    <div class="slides">
                        <div class="slide">
                            <img src="img/fasana.jpg" alt="Slide 1">
                        </div>
                        <div class="slide">
                            <img src="img/header-bg.jpg" alt="Slide 2">
                        </div>
                        <div class="slide">
                            <img src="img/g10.jpg" alt="Slide 3">
                        </div>
                    </div>
                </div>


                <!-- Contenido superpuesto -->
                <div class="overlay overlay-bg"></div>

                        <div class="banner-content col-lg-8">

                            <h1 class="text-white hidden">
                                Casal Can Pujol Inca
                            </h1>
                            <img class="imagen-logo" src="img/logo1.png" alt="can pujol inca" title="can pujol inca" />
                            <h2 class="text-white marge"><?php echo traducir('opening'); ?></h2>
                            <p class="pt-20 pb-20 text-white"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                eu fugiat nulla pariatur.
                            </p>
                        </div>

            </section>


			<!-- Start gallery Area -->
			<section class="gallery-area section-gap" id="gallery">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10 text-white">Our Exhibition Gallery</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
					<div id="grid-container" class="row">
						<a class="single-gallery" href="img/g1.jpg"><img class="grid-item" src="img/g1.jpg"></a>
						<a class="single-gallery" href="img/g2.jpg"><img class="grid-item" src="img/g2.jpg"></a>
						<a class="single-gallery" href="img/g3.jpg"><img class="grid-item" src="img/g3.jpg"></a>
						<a class="single-gallery" href="img/g4.jpg"><img class="grid-item" src="img/g4.jpg"></a>
						<a class="single-gallery" href="img/g5.jpg"><img class="grid-item" src="img/g5.jpg"></a>
						<a class="single-gallery" href="img/g6.jpg"><img class="grid-item" src="img/g6.jpg"></a>
						<a class="single-gallery" href="img/g7.jpg"><img class="grid-item" src="img/g7.jpg"></a>
						<a class="single-gallery" href="img/g8.jpg"><img class="grid-item" src="img/g8.jpg"></a>
						<a class="single-gallery" href="img/g9.jpg"><img class="grid-item" src="img/g9.jpg"></a>
						<a class="single-gallery" href="img/g10.jpg"><img class="grid-item" src="img/g10.jpg"></a>
						<a class="single-gallery" href="img/g11.jpg"><img class="grid-item" src="img/g11.jpg"></a>
						<a class="single-gallery" href="img/g12.jpg"><img class="grid-item" src="img/g12.jpg"></a>
						<a class="single-gallery" href="img/g4.jpg"><img class="grid-item" src="img/g4.jpg"></a>
						<a class="single-gallery" href="img/g5.jpg"><img class="grid-item" src="img/g5.jpg"></a>
					</div>
				</div>
			</section>
			<!-- End gallery Area -->


<?php
    include_once 'footer.php';
?>

<script>
    let currentIndex = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    function showSlide(index) {
        currentIndex = index;
        if (currentIndex < 0) {
            currentIndex = totalSlides - 1;
        } else if (currentIndex >= totalSlides) {
            currentIndex = 0;
        }

        const offset = -currentIndex * (100 / totalSlides);
        document.querySelector('.slides').style.transform = `translateX(${offset}%)`;
    }

    setInterval(() => {
        showSlide(currentIndex + 1); // Cambiar al siguiente slide
    }, 5000); // Cambia el slide cada 5 segundos

    showSlide(currentIndex); // Mostrar el primer slide al cargar la página

</script>

