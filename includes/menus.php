<?php

/*Registrando MENU**/

function cristina_menus() {
    
    register_nav_menus(array(
        'main-menu' => __('Menu principal','cristina')
        
        ));
}

add_action('init','cristina_menus');


