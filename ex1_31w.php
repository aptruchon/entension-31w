<?php
    /**
     * Plugin Name: Extension de l'exercice #1
     * Author: Alex Poulin Truchon
     * Description: Une première extension pour l'exercice #1
     * Author URI: https://github.com/aptruchon/31w-extension1.git
     */ 
?>

<?php
function fonction_generale(){
    function mon_31w_scripts() {
        wp_enqueue_style( 'mon_31w-style', get_stylesheet_uri(), array(), _S_VERSION );
        
    }
    add_action( 'wp_enqueue_scripts', 'mon_31w_scripts' );
}
    add_action("init", "generale");
?>