<?php /*
Plugin Name: Minhas Redes Sociais
Plugin URI: http://exemplo.com
Description: Plugin desenvolvido para exibir as minhas redes sociais
Version: 1.0
Author: Elton Oliveira
Author URI: http://meusite.com.br
Text Domain: minhas-redes-sociais
License: GPL2
*/


require_once(dirname(__FILE__).'/widgets/meu_widget.php');
class Minhas_Redes {
  private static $instance;

  public static function getInstance() {
    if (self::$instance == NULL) {
      self::$instance = new self();
    }

    return self::$instance;
  }

  private function __construct() {
    add_action( 'widgets_init', array($this, 'registe_widgets'));
  }
  public function registe_widgets(){
    register_widget( 'Meu_Widget' );
  }


}

Minhas_Redes::getInstance();

