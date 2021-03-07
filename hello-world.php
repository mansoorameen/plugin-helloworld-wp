<?php

/*
Plugin Name: Hello Dolly Imitate
Description: Imitating a Hello Dolly plugin for displaying Hello World
Author: Manzoor
Version: 1.0.0
*/

function hello_dolly_text () {
    echo "<p id='dolly'> Hello world! </p>";
}

add_action( 'admin_notices', 'hello_dolly_text' );

function hello_dolly_css () {
    echo "
    <style type='text/css'>
    #dolly {
        float: right;
            }
    </style>
    ";
    }

add_action( 'admin_head', 'hello_dolly_css' );