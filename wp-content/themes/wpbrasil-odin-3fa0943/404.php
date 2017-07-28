<?php get_header(); ?>
  <section id="mainContent">
    <div class="row">

      <div class="<?php echo odin_classes_page_full(); ?>" tabindex="-1" role="main">
        <div class="error_page_content">
          <h1><?php _e( 'Nada encontrado', 'odin' ); ?></h1>
          <h2>Desculpe :(</h2>
          <h3><?php _e( 'Esta página não exite e/ou não foi encontrada.', 'odin' ); ?></h3>
          <p class="wow fadeInLeftBig">Por favor, continue pela <a href="<?php echo home_url(); ?>">Página Inicial</a></p>
        </div>
        </div>
      </div>

    </div>
  </section>
</div>
<?php get_footer(); ?>