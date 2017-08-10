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
$capability = "administrator";



add_action("admin_menu", "menus");

function menus() {
    add_menu_page("atendimento", "atendimento", 'administrator', 'atendimento');
}
