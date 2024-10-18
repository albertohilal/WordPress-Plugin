<?php
/*
Plugin Name: Test Plugin
Plugin URI: http://solodata.es
Description: Este es un plugin de pruebas
Version: 0.0.1
Author: Tu Nombre
Author URI: http://tu-sitio-web.com
*/



// Activation and deactivation hooks
function Activar() {
    // Activación del plugin
}

function Desactivar() {
   flush_rewrite_rules();
    // Desactivación del plugin
}

register_activation_hook(__FILE__, 'Activar');
register_deactivation_hook(__FILE__, 'Desactivar');

add_action('admin_menu', 'CrearMenu');

// Adding admin menu
function CrearMenu() {
    add_menu_page(
        'Super Encuestas', // Título de la página
        'Super Encuestas Menu', // Título del menú
        'manage_options', //  Quién puede ver este menú
        plugin_dir_path(__FILE__).'admin/lista_encuestas.php', // Slug del menú
        null, // Función que muestra el contenido
        plugin_dir_url(__FILE__).'admin/img/icon.png', // Icono del menú
        '1' // Posición del menú en el panel
    );
}



// Function to display menu content
function MostrarContenido() { 
    echo "<h1>Contenido de la página</h1>";
}
