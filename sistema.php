<?php

/*
  Plugin Name: Sistema de corretores
  Description: sistema de controle e relacionamento de clientes
  Version: 0.1
  License: GPL
  Author: Horácio Neto
  Author URI: http://www.planet1.com.br
 */

// Os snippets de código virão aqui
/* * ******************************************************** */
add_action("admin_menu", "menus");

function menus() {
    add_menu_page("atendimento", "atendimento", 'administrator', 'atendimento');
    add_submenu_page("atendimento", "cadastro", "cadastro", "administrator", "cad", "pagina1");
}

function pagina1() {
    wp_enqueue_script("angular", "js/angular-1.6.4/angular.min.js", $deps, $ver);
    wp_enqueue_script($handle);
    require_once 'includes/atendimento/cadastro.php';
}

/***********************************************************/