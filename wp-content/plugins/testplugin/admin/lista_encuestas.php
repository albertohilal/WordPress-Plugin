 <?php
    global $wpdb;
    $query = " SELECT * FROM {$wpdb->prefix}encuestas";
    $lista_encuestas = $wpdb->get_results($query, ARRAY_A);
    if(empty($lista_encuestas )){
        $lista_encuestas = array();
    }
    ?>
    <div class="wrap">
 <div class="wrap">
 <?php
    echo "<h1>".get_admin_page_title()."</h1>";
    ?>
    <a class="page-title-action">Añadir nueva</a>
    <br><br><br>

    <table class="wp-list-table widefat fixed striped pages">
        <thead>
                <th >Nombre de la encuesta</th>
                <th >ShortCode</th>
                <th >Acciones</th>
        </thead>
        <tbody id_"the-list">
            <?php
                foreach($lista_encuestas as $key => $value){
                    $nombre = $value['Nombre'];
                    $shortcode = $value['ShortCode'];
                    echo "             
                        <tr>
                            <td>$nombre</td>
                            <td>$shortcode</td>
                            <td>
                                <a class='page-title-action'>Ver estadisticas</a>
                                <a class='page-title-action'>Borrar</a>
                            </td>
                        </tr>
                    ";
                }	
                ?>
            
        </tbody>
        </table>