<?php
/**
 * @package Pool Calculator
 * @version 1.0
 */
/*
Plugin Name: Estimator Demo
Plugin URI: https://medium.com/@kolawole.abobade/adding-react-to-a-site-wordpress-part-1-7e02f5fbdf79
Description: Estimator demo 
Author: Abobade Kolawole
Version: 1.0
Author URI: https://medium.com/@kolawole.abobade
*/

function display_estimator(){
    echo '<div id="estimator_container"></div>';
}

function display_function1285($atts){
    add_css191();
    display_estimator();
    add_js232();
}
add_shortcode( 'estimator', 'display_function1285' );

function add_css191(){
    echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .icon-info{cursor: pointer;
            height: 12px;} div.modal{z-index:9999999991050;} div button.close {color:#000;}
    </style>';
}

function add_js232(){
    wp_enqueue_script( 'core_react', 'https://unpkg.com/react@16/umd/react.development.js' );
    wp_enqueue_script( 'dev_react', 'https://unpkg.com/react-dom@16/umd/react-dom.development.js' );
    wp_enqueue_script( 'core_babel', 'https://unpkg.com/babel-standalone@6/babel.min.js' );
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' );
    wp_enqueue_script( 'paypal', 'https://www.paypalobjects.com/api/checkout.js');
    wp_enqueue_script( 'core_script', plugins_url( '/calc.js', __FILE__ ));
}
