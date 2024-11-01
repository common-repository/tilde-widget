<?php
class Tilde_Widget extends WP_Widget {

  function __construct() {

    parent::__construct(

      // Base ID of the widget
      'tilde_widget',
      // Name of the widget
      __('Tilde widget', 'tilde' ),

      // Widget options
      array (
          'description' => __( 'Indsætter en Tilde Widget på din side.', 'tilde' )
      )
    );

  }

  function form( $instance ) {

    if ( isset( $instance[ 'title' ] ) ) :
      $title = $instance[ 'title' ];
    else :
      $title = __( '', 'tilde' );
    endif;

    // Narkup for form
    ?>
      <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
      </p>
    <?php
  }

  function update( $new_instance, $old_instance ) {

    $instance = $old_instance;
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;

  }

  function widget( $args, $instance ) {

    extract( $args );
    $title = isset($instance['title']) ? apply_filters( 'widget_title', $instance['title'] ) : '';
    $widget_id = get_option('widget_id');

    // Before widget tag
    echo $args['before_widget'];
    
    // Title
    if ( ! empty( $title ) ) :
      echo $args['before_title'] . $title  . $args['after_title'];
    endif; ?>

    <div id="towoo-widget"></div>
    <script type="text/javascript">
      var Towoo = Towoo || {};
      Towoo.widgetId = '<?php echo $widget_id; ?>';

      (function(t,i,l,d,e) {
          d=t.createElement(i);d.src=l;d.async=1;
          e=t.getElementsByTagName(i)[0];
          e.parentNode.appendChild(d);
      })(document,'script','//cdn.towoo.io/widget.js');
    </script>
    
    <?php

    // After widget tag
    echo $args['after_widget'];
  }

}

// Register the widget
function register_tilde_widget() {
    register_widget( 'Tilde_Widget' );
}
add_action( 'widgets_init', 'register_tilde_widget' );
