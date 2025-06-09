<?php

?>
<!-- start footer Area -->
			<footer>
                <section class="footer-area section-gap">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">

                                <div class="single-footer-widget">
                                    <h6><?php echo traducir('sobrenosotros'); ?></h6>
                                    <p>
                                        <?php echo traducir('mensajesobrenosotros'); ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3  col-md-6 col-sm-6">
                                <div class="single-footer-widget">
                                    <h6><?php echo traducir('seguridad'); ?></h6>
                                    <div class="" id="mc_embed_signup">
                                        <p>
                                            <a href="#" class="text-black"><?php echo traducir('pprivacidad'); ?></a>
                                        </p>
                                        <p>
                                            <a href="#" class="text-black"><?php echo traducir('pcookies'); ?></a>
                                        </p>
                                        <p>
                                            <a href="#" class="text-black"><?php echo traducir('alegal'); ?></a>
                                        </p>
                                        <p>
                                            <a href="#" id="abrir-modal-cookies" class="text-black" data-bs-toggle="modal" data-bs-target="#cookieModal"><?php echo traducir('ccookies'); ?></a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                                <div class="single-footer-widget">
                                    <h6><?php echo traducir('siguenos'); ?></h6>
                                    <p><?php echo traducir('sersocial'); ?></p>
                                    <div class="footer-social d-flex align-items-center">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-dribbble"></i></a>
                                        <a href="#"><i class="fa fa-behance"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single-footer-widget">
                                    <h6><?php echo traducir('contacto'); ?></h6>
                                    <div class="footer-social" id="mc_embed_signup">
                                        <p>
<!--                                            <a href="https://www.google.com/maps/place//data=!4m2!3m1!1s0x1297c510193fbcb9:0xb19b6bc402626aa7?sa=X&ved=1t:8290&ictx=111" target="_blank">-->
                                                <i class="fa fa-map-marker"></i>
                                                <?php echo traducir('calle'); ?> Comerç, nº20, <br>
                                                07300 Inca, Illes Balears <br>
                                                <?php echo traducir('pais'); ?>
<!--                                            </a>-->
                                        </p>
                                        <p id="phone-linkfooter">
                                            <i class="fa fa-phone"></i> (+34) 640 967 828
                                        </p>
<!--                                        <p>-->
<!--                                            <a href="https://wa.me/34640967828" target="_blank"><i class="fa fa-whatsapp"></i> WhatsApp</a>-->
<!--                                        </p>-->
<!--                                        <p>-->
<!--                                            <a href="/casalCanPujolInca/contact.php" target="_blank"><i class="fa fa-envelope"></i> --><?php //echo traducir('contacto'); ?><!--</a>-->
<!--                                        </p>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="text-center copy-right-text">
                        <p class="footer-text-section">
                            &copy; Casal Can Pujol Inca <script>document.write(new Date().getFullYear());</script>
                            <br>

                            <a href="https://esteveseguicasas.xyz/" target="_blank"><?php echo traducir('hecha'); ?> Esteve Seguí Casas</a>
                        </p>
                    </div>
                </section>

                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <a id="colorlib" href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</footer>



<div id="overbox3">
    <div id="infobox3">
        <div id="cookieBanner" class="cookie-banner" style="display: none;">
            <p>Este sitio web utiliza cookies para mejorar la experiencia del usuario. <a href="#">Más
                    información</a></p>
            <button id="acceptCookies" class="btn btn-primary">Aceptar</button>
            <button id="cancelCookies" class="btn btn-primary">Rechazar</button>
            <button id="configureCookies" class="btn btn-light" data-bs-toggle="modal"
                    data-bs-target="#cookieModal">Configurar</button>
        </div>
    </div>
</div>

<div class="modal fade" id="cookieModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="staticBackdropLabel">Configuración de Cookies</h2>
<!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
            </div>
            <div class="modal-body">
                <p>Seleccione sus preferencias de cookies:</p>
                <div>
                    <!-- //minimas no puede quitarlas -->
                    <label><input type="checkbox" id="navigationCookies" onclick="return false;" checked> Cookies técnicas esenciales</label><br>
                    <p>Son necesarias para gestionar la navegación dentro de la web o para mantener al usuario conectado. No se pueden desactivar porque afectaría al funcionamiento de la web.</p>
                </div>

                <div>
                    <label><input type="checkbox" id="customizeCookies"> Cookies de personalización</label><br>
                    <p>Necesarias para recordar determinadas preferencias del usuario.</p>
                </div>

                <div>
                    <label><input type="checkbox" id="thirdPartyCookies"> Cookies analíticas</label><br>
                    <p>Nos ayudan a nosotros y a terceros a recopilar información sobre el uso de la web, a efectos de realizar un análisis estadístico para poder mejorar la estructura y los contenidos..</p>
                </div>

                <div>
                    <label><input type="checkbox" id="advertisingPartyCookies"> Cookies publicitarias comportamentales</label><br>
                    <p>Ayudan a recopilar los hábitos de navegación del usuario para crear un perfil de sus intereses y para mostrarle anuncios adaptados a los mismos.</p>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="acceptAll">Acceptar todo</button>
                <button type="button" class="btn btn-primary" id="calcelAll">Cancelar todo</button>
                <button type="button" id="savePreferences" class="btn btn-info">Confirmar Selección</button>
            </div>
        </div>
    </div>
</div>

<!-- End footer Area -->

<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/easing.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/justified.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/cookie.js"></script>
<script src="js/main.js"></script>

</body>
</html>
