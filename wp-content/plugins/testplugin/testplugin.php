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
function Activar(){
        global $wpdb;

        $sql ="CREATE TABLE IF NOT EXISTS {$wpdb->prefix}encuestas(
        `EncuestaId` INT NOT NULL AUTO_INCREMENT,
            `Nombre` VARCHAR(45) NULL,
            `ShortCode` VARCHAR(45) NULL,
            PRIMARY KEY (`EncuestaId`));";

         $wpdb->query($sql);   

         $sql2 = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}encuenstas_detalle(
            `DetalleId` INT NOT NULL AUTO_INCREMENT,
            `EncuestaId` INT NULL,
            `Pregunta` VARCHAR(150) NULL,
            `Tipo` VARCHAR(45) NULL,
            PRIMARY KEY (`DetalleId`));";
        $wpdb->query($sql2);   

        $sql3 = "CREATE TABLE IF NOT EXISTS {$wpdb->prefix}encuestas_respuesta (
            `RespuestaId` INT NOT NULL AUTO_INCREMENT,
            `DetalleId` INT NULL,
            `Codigo` VARCHAR(45) NULL,
            `Respuesta` VARCHAR(45) NULL,
            PRIMARY KEY (`RespuestaId`));
          ";
        $wpdb->query($sql3);  

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

//encolar bootstrap

function EncolarBootstrapJS($hook){
    //echo "<script>console.log('$hook')</script>";
    if($hook != "testplugin/admin/lista_encuestas.php"){
        return ;
    }
    wp_enqueue_script('bootstrapJs',plugins_url('admin/bootstrap/js/bootstrap.min.js',__FILE__),array('jquery'));
} 
add_action('admin_enqueue_scripts','EncolarBootstrapJS');

function EncolarBootstrapCSS($hook){
    if($hook != "testplugin/admin/lista_encuestas.php"){
        return ;
    }
    wp_enqueue_style('bootstrapCSS',plugins_url('admin/bootstrap/css/bootstrap.min.css',__FILE__));
}
add_action('admin_enqueue_scripts','EncolarBootstrapCSS'); 

//encolar js propio

function EncolarJS($hook){
    if($hook != "testplugin/admin/lista_encuestas.php"){
        return ;
    }
    wp_enqueue_script('JsExterno',plugins_url('admin/js/lista_encuestas.js',__FILE__),array('jquery'));
    
}
add_action('admin_enqueue_scripts','EncolarJS');
