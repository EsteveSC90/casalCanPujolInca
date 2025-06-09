<?php
    include_once 'header.php';
?>

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
                                <?php echo traducir('contacte'); ?>
							</h1>	
							<p class="text-white link-nav"><a href="index.php"><?php echo traducir('home'); ?> </a>  <span class="lnr lnr-arrow-right"></span>  <a href="reserva.php"> <?php echo traducir('reserva'); ?></a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						<div class="map-wrap" style="width:100%; height: 445px;" id="map">
                            <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1232.2382353845636!2d2.9089551!3d39.7208678!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb19b6bc402626aa7!2sCasal%20Can%20Pujol%20Inca!5e0!3m2!1sen!2ses!4v1647543308199!5m2!1sen!2ses" allowfullscreen="" loading="lazy" sandbox="allow-scripts allow-same-origin"></iframe>
                        </div>
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5>Mallorca, Espanya</h5>
									<p>Carrer Comerç, nº20, <br>
                                        07300 Inca, Illes Balears <br>
                                        <?php echo traducir('pais'); ?>
                                    </p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5 id="phone-link">Telf. +34 640 967 828</h5>
									<p><?php echo traducir('openCall'); ?></p>
								</div>
							</div>
						</div>

						<div class="col-lg-8">
                            <form class="form-area" id="myForm" action="mail.php" method="post" class="contact-form text-right">
                                <div class="row">
                                    <div class="col-lg-6 form-group">
                                        <label for="name"><?php echo traducir('sname'); ?></label>
                                        <input id="name" name="name" placeholder="<?php echo traducir('sendname'); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" required class="common-input mb-20 form-control" type="text">

                                        <label for="fecha">Selecciona una fecha:</label>
                                        <input id="fecha" type="date" name="fecha" required class="common-input mb-20 form-control" onfocus="this.placeholder = '<?php echo traducir('sendname'); ?>'">

                                        <label for="cantidad_personas">Selecciona la cantidad de personas:</label>
                                        <input id="cantidad_personas" type="number" name="cantidad_personas" min="1" value="1" required class="common-input mb-20 form-control" onfocus="this.placeholder = '<?php echo traducir('sendname'); ?>'">
                                    </div>
                                    <div class="col-lg-6 form-group">
                                        <label for="email"><?php echo traducir('saddress'); ?></label>
                                        <input id="email" name="email" placeholder="<?php echo traducir('sendaddress'); ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo traducir('sendaddress'); ?>'" required class="common-input mb-20 form-control" type="email">

                                        <label for="subject"><?php echo traducir('ssubject'); ?></label>
                                        <select id="subject" name="subject" class="common-input mb-20 form-control" required>
                                            <option value="" disabled selected><?php echo traducir('seleccion'); ?></option>
                                            <option value="Visita"><?php echo traducir('hvisita'); ?></option>
                                            <option value="Menú Turístico"><?php echo traducir('hmenuturistico'); ?></option>
                                            <option value="Menú Degustación"><?php echo traducir('hmenudegustacion'); ?></option>
                                        </select>

                                        <label for="message"><?php echo traducir('ssolicitudesespeciales'); ?></label>
                                        <textarea id="message" class="common-textarea form-control" name="message" placeholder="<?php echo traducir('sendsolicitudesespeciales'); ?>" onfocus="this.placeholder = '<?php echo traducir('sendsolicitudesespeciales'); ?>'" onblur="this.placeholder = 'Message'"></textarea>
                                        <!-- Agregar el widget de reCAPTCHA -->
                                        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
<!--                                        <button class="primary-btn mt-20 text-white" style="float: right;" type="submit">--><?php //echo traducir('send'); ?><!--</button>-->
                                    </div>
                                </div>
                                <button class="primary-btn mt-20 text-white btn-block" type="submit"><?php echo traducir('send'); ?></button>
                                <div class="mt-20 alert-msg" style="text-align: center;"></div>
                            </form>
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

    <!-- Incluye el script de reCAPTCHA v3 -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LfkwJ0pAAAAAGR-pQg630UYa6CZKoSnjxYHSfIn"></script>

    <script>
        // Ejecuta reCAPTCHA v3 y actualiza el campo g-recaptcha-response
        grecaptcha.ready(function() {
            grecaptcha.execute('6LfkwJ0pAAAAAGR-pQg630UYa6CZKoSnjxYHSfIn', { action: 'submit' }).then(function(token) {
                document.getElementById('g-recaptcha-response').value = token;
            });
        });

        var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
        if (isMobile) {
            document.getElementById('phone-link').innerHTML = '<a href="tel:+34640967828">Telf. +34 640 967 828</a>';
        } else {
            document.getElementById('phone-link').innerHTML = 'Telf. +34 640 967 828';
        }
    </script>

<?php
    include_once 'footer.php';
?>



