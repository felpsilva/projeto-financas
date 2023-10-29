<?php
/**
 * Resumo Diário
 *
 * Plugin Name: Resumo Diário
 * Description: Plugin utilizado para criar cadastro de resumos diários
 * Version:     1.0.0
 * Author:      Felipe 
 */

 add_action('init', 'registrar_diario_post_type');

 function registrar_diario_post_type() {
     register_post_type('diario', [
         'label' => 'Atualizações Diárias',
         'public' => true,
         'show_ui' => true,
         'show_in_menu' => true,
         'has_archive' => true,
         'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
     ]);
 }
