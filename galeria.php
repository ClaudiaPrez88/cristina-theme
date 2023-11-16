 <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Pinturas Eterna</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Todos</li>
                            <li data-filter=".barnices">Barnices</li>
                            <li data-filter=".adhesivos">Adhesivos</li>
                            <li data-filter=".accesorios">Accesorios</li>
                            <li data-filter=".premium">Acrílico Premium</li>
                            <li data-filter=".profesional">Acrílico Profesional</li>
                            <li data-filter=".adhesivo">Adhesivos</li>
                            <li data-filter=".base-a">Base acrílica</li>
                            <li data-filter=".dimensional">Dimensionales</li>
                            <li data-filter=".laca">Laca vitral y pasta relieve</li>
                            <li data-filter=".laminas">Laminas de Seda </li>
                            <li data-filter=".tela">Pintura de tela</li>
                            <li data-filter=".chalk">ChalkPaint</li>
                            <li data-filter=".plastika">Plastika</li>
                            <li data-filter=".sublimacion">Sublimación</li>
                            <li data-filter=".texturas">Texturas</li>
                            <li data-filter=".tonalizadores">Tonalizadores</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter"> 
            <?php
                // Supongamos que $informacion es tu array
                $informacion = array(
                    array('categoria' => 'adhesivos', 'contenido' => 'Adhesivo Eterna','link' => 'https://claudialatam.com/cristina/wp-content/uploads/2023/11/adhesivo-eterna.png'),
                    array('categoria' => 'pasta', 'contenido' => 'Laca vitral y Pasta relieve','link' => 'https://claudialatam.com/cristina/wp-content/uploads/2023/11/laca-vitral-eterna.png'),
                    array('categoria' => 'laminas', 'contenido' => 'Laminas de seda','link' => 'https://claudialatam.com/cristina/wp-content/uploads/2023/11/laminas.png'),
                    array('categoria' => 'dimensional', 'contenido' => 'Dimensionales','link' => 'https://claudialatam.com/cristina/wp-content/uploads/2023/11/dimensional-eterna.png'),
                    array('categoria' => 'barnices', 'contenido' => 'Barnices','link' => 'https://claudialatam.com/cristina/wp-content/uploads/2023/11/barniz.png'),
                    array('categoria' => 'accesorios', 'contenido' => 'Accesorios','link' => 'https://claudialatam.com/cristina/wp-content/uploads/2023/11/accesorio-eterna.png'),
                    array('categoria' => 'premium', 'contenido' => 'Acrílico Decorativo Premium','link' => 'https://claudialatam.com/cristina/wp-content/uploads/2023/11/acrilico-decorativo.png'),
                    array('categoria' => 'profesional', 'contenido' => 'Acrílico Profesional','link' => 'https://claudialatam.com/cristina/wp-content/uploads/2023/11/acrilico-profesional.png'),
                    array('categoria' => 'laca', 'contenido' => 'Laca Vitral','link' => 'https://claudialatam.com/cristina/wp-content/uploads/2023/11/laca-vitral-eterna.png'),
                    array('categoria' => 'base-a', 'contenido' => 'Base Acrílica','link' => 'https://claudialatam.com/cristina/wp-content/uploads/2023/11/base-acrilica-eterna.png'),
                    array('categoria' => 'tela', 'contenido' => 'Pinturas para tela','link' => 'https://claudialatam.com/cristina/wp-content/uploads/2023/11/pintura-tela-eterna.png'),
                    array('categoria' => 'chalk', 'contenido' => 'Pintura ChalkPaint','link' => 'https://claudialatam.com/cristina/wp-content/uploads/2023/11/pintura-pizarron-eterna.png'),
                    array('categoria' => 'plastika', 'contenido' => 'Plastika','link' => 'https://claudialatam.com/cristina/wp-content/uploads/2023/11/plastika.png'),
                    array('categoria' => 'sublimacion', 'contenido' => 'Sublimación','link' => 'https://claudialatam.com/cristina/wp-content/uploads/2023/11/pintura-sublimacion-eterna.png'),
                    array('categoria' => 'texturas', 'contenido' => 'Texuras','link' => 'https://claudialatam.com/cristina/wp-content/uploads/2023/11/texturas-eterna.png'),
                    array('categoria' => 'tonalizadores', 'contenido' => 'Tonalizadores','link' => 'https://claudialatam.com/cristina/wp-content/uploads/2023/11/tonalizadores-eterna.png'),
                );
                // Ahora, recorremos el array con un bucle foreach
                foreach ($informacion as $item) {
                    // $item es un array asociativo que contiene 'categoria', 'contenido' y 'link'
                    $categoria = $item['categoria'];
                    $contenido = $item['contenido'];
                    $link = $item['link'];
                    ?>
                
                    <!-- Aquí comienza el HTML dentro del bucle -->
                    <div class="col-lg-3 col-md-4 col-sm-6 mix <?php echo $categoria; ?>">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo $link; ?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h5><a href="#"><?php echo $contenido; ?></a></h5>
                        </div>
                    </div>
                </div>
                
                    <!-- Aquí termina el HTML dentro del bucle -->
                
                    <?php
                }
                ?>
    
                
                
            </div>
        </div>
    </section>
    <!-- Featured Section End -->
