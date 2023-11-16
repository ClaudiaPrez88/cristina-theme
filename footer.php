 <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                   <?php 

                        if( is_active_sidebar('sidebar-footer-izq') ){

                            dynamic_sidebar('sidebar-footer-izq');

                        } 

                     ?>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <?php 

                        if( is_active_sidebar('sidebar-footer-cent') ){

                            dynamic_sidebar('sidebar-footer-cent');

                        } 

                     ?>
                   
                </div>
                <div class="col-lg-4 col-md-12">
                    
                    <?php 

                        if( is_active_sidebar('sidebar-footer-der') ){

                            dynamic_sidebar('sidebar-footer-der');

                        } 

                     ?>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados por 
  <a href="#" target="_blank">Cristina Importaciones.</a> Desarrollo por Claudia Pérez.</p></div>
                        <div class="footer__copyright__payment"><img src="<?php echo IMAGES; ?>/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End Plugins -->
    <script src="<?php echo THEMEROOT; ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo THEMEROOT; ?>/js/main.js"></script>
    
    <script src="<?php echo THEMEROOT; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo THEMEROOT; ?>/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo THEMEROOT; ?>/js/jquery-ui.min.js"></script>
    <script src="<?php echo THEMEROOT; ?>/js/jquery.slicknav.js"></script>
    <script src="<?php echo THEMEROOT; ?>/js/mixitup.min.js"></script>
    <script src="<?php echo THEMEROOT; ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo THEMEROOT; ?>/js/main.js"></script>

    <?php wp_footer(); ?>


</body>

</html>