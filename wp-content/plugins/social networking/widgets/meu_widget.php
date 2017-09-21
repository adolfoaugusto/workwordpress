<?php

class Meu_Widget extends WP_Widget {

    public function __construct() {

        parent::WP_Widget( false, $name_ops = "Social Network" );
    }

    public function widget( $args, $instance ) {
        extract($args);
        $title          = apply_filters('widget_title', $instance['title'] );
        $urlFeed        = $instance['urlFeed'];
        $urlFacebook    = $instance['urlFacebook'];
        $urlTwitter     = $instance['urlTwitter'];
        $urlYoutube     = $instance['urlYoutube'];
        $urlGplus       = $instance['urlGplus'];

        echo $before_widget;
            if($title){

                echo $before_widget.$after_widget;

                echo '<a href="'.$urlFeed.'" alt="Feed" target="_blank">
                        <i class="fa fa-rss-square fa-3x"></i></i></a>';
                echo '<a href="'.$urlFacebook.'" alt="Facebook" target="_blank">
                        <i class="fa fa-facebook-square fa-3x"></i></a>';
                echo '<a href="'.$urlTwitter.'" alt="Twitter" target="_blank">
                        <i class="fa fa-twitter-square fa-3x"></i></a>';
                echo '<a href="'.$urlYoutube.'" alt="Youtube" target="_blank">
                        <i class="fa fa-youtube-square fa-3x"></i></a>';
                echo '<a href="'.$urlGplus.'" alt="GooglePlus" target="_blank">
                        <i class="fa fa-google-plus-square fa-3x"></i></a>';
            }

        echo $after_widget;
    }

    public function update( $new_instance, $old_instance ) {

        $instance = $old_instance;
        $instance['title']          = wp_strip_all_tags( $new_instance['title'] );
        $instance['urlFeed']        = wp_strip_all_tags( $new_instance['urlFeed'] );
        $instance['urlTwitter']     = wp_strip_all_tags( $new_instance['urlTwitter'] );
        $instance['urlFacebook']    = wp_strip_all_tags( $new_instance['urlFacebook'] );
        $instance['urlYoutube']     = wp_strip_all_tags( $new_instance['urlYoutube'] );
        $instance['urlGplus']       = wp_strip_all_tags( $new_instance['urlGplus'] );

        return $instance;
    }

    public function form( $instance ) {
        $title          = esc_attr( $instance['title'] );
        $urlFeed        = esc_attr( $instance['urlFeed'] );
        $urlTwitter     = esc_attr( $instance['urlTwitter'] );
        $urlFacebook    = esc_attr( $instance['urlFacebook'] );
        $urlYoutube     = esc_attr( $instance['urlYoutube'] );
        $urlGplus       = esc_attr( $instance['urlGplus'] );
        ?>
        <p>
            <label for="<?=$this->get_field_id('title');?>"> <?= _e('Title'); ?></label>
            <input class="widefat" type="text" id="<?=$this->get_field_id('title');?>"
            name="<?=$this->get_field_name('title'); ?>" value="<?=$title ?>"/>
        </p>
        <p>
            <label for="<?=$this->get_field_id('urlFeed');?>"> <?= _e('Feed'); ?></label>
            <input class="widefat" type="text" id="<?=$this->get_field_id('urlFeed');?>"
            name="<?=$this->get_field_name('urlFeed'); ?>" value="<?=$urlFeed ?>"/>
        </p>
        <p>
            <label for="<?=$this->get_field_id('urlTwitter');?>"> <?= _e('Twitter'); ?></label>
            <input class="widefat" type="text" id="<?=$this->get_field_id('urlTwitter');?>"
            name="<?=$this->get_field_name('urlTwitter'); ?>" value="<?=$urlTwitter ?>"/>
        </p>
        <p>
            <label for="<?=$this->get_field_id('urlFacebook');?>"> <?= _e('Facebook'); ?></label>
            <input class="widefat" type="text" id="<?=$this->get_field_id('urlFacebook');?>"
            name="<?=$this->get_field_name('urlFacebook'); ?>" value="<?=$urlFacebook ?>"/>
        </p>
        <p>
            <label for="<?=$this->get_field_id('urlYoutube');?>"> <?= _e('Youtube'); ?></label>
            <input class="widefat" type="text" id="<?=$this->get_field_id('urlYoutube');?>"
            name="<?=$this->get_field_name('urlYoutube'); ?>" value="<?=$urlYoutube ?>"/>
        </p>
        <p>
            <label for="<?=$this->get_field_id('urlGplus');?>"> <?= _e('Gplus'); ?></label>
            <input class="widefat" type="text" id="<?=$this->get_field_id('urlGplus');?>"
            name="<?=$this->get_field_name('urlGplus'); ?>" value="<?=$urlGplus ?>"/>
        </p>

        <?php
    }
}
add_action( 'widgets_init', array($this, 'Meu_Widget'));