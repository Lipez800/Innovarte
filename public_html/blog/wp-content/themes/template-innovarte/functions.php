<?php
/* WIDGETS */

function ed_support_thumbnails() {
  add_theme_support('post-thumbnails'); // thumbnails
}
add_action('after_setup_theme', 'ed_support_thumbnails'); // carrega parametros de suporte do tema

?>