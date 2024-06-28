<?php
/*
Plugin Name: Formularios Avanzados
Description: Plugin para crear y gestionar formularios personalizados.
Version: 1.0
Author: Jennifer Rodríguez Estrada
*/

if ( !defined( 'ABSPATH' ) ) {
    exit;
}


//shortcode form 
function sc_crear_formulario_solicitud() {
    ob_start();
    ?>
    <form id="formulario-solicitud" method="post">
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </p>
        <p>
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
        </p>
        <p>
            <label for="servicio">Servicio Solicitado:</label>
            <select id="servicio" name="servicio">
                <option value="desarrollo-web">Desarrollo Web</option>
                <option value="diseno-grafico">Diseño Gráfico</option>
                <option value="otro">Otro</option>
            </select>
        </p>
        <p>
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required></textarea>
        </p>
        <p>
            <input type="submit" name="enviar_solicitud" value="Enviar Solicitud">
        </p>
    </form>
    <?php
    return ob_get_clean();
}
add_shortcode( 'formulario_solicitud', 'sc_crear_formulario_solicitud' );


//save data
function sc_procesar_formulario_solicitud() {
    if ( isset( $_POST['enviar_solicitud'] ) ) {
        $nombre = sanitize_text_field( $_POST['nombre'] );
        $email = sanitize_email( $_POST['email'] );
        $servicio = sanitize_text_field( $_POST['servicio'] );
        $mensaje = sanitize_textarea_field( $_POST['mensaje'] );

        //insert data into database
        global $wpdb;
        $tabla_solicitudes = $wpdb->prefix . 'solicitudes_cotizacion';
        $wpdb->insert(
            $tabla_solicitudes,
            array(
                'nombre' => $nombre,
                'email' => $email,
                'servicio' => $servicio,
                'mensaje' => $mensaje,
                'fecha' => current_time( 'mysql' ),
            )
        );

        //Send email notification
        wp_mail( get_option( 'admin_email' ), 'Nueva Solicitud de Cotización', 'Has recibido una nueva solicitud de cotización de ' . $nombre );

        echo '<p>Gracias por tu solicitud. Nos pondremos en contacto contigo pronto.</p>';
    }
}
add_action( 'wp', 'sc_procesar_formulario_solicitud' );

//create table for database 
function sc_crear_tabla_solicitudes() {
    global $wpdb;
    $tabla_solicitudes = $wpdb->prefix . 'solicitudes_cotizacion';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $tabla_solicitudes (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        nombre tinytext NOT NULL,
        email text NOT NULL,
        servicio text NOT NULL,
        mensaje text NOT NULL,
        fecha datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}
register_activation_hook( __FILE__, 'sc_crear_tabla_solicitudes' );
?>

