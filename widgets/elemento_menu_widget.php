<?php
// Creating the widget
class elem_menu_widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
        // Base ID of your widget
            'elem_menu_widget',
        // Widget name will appear in UI
            __('Danim0reno - Elementos del Menu', 'cw_widget_domain'),
        // Widget description
            array(
            'description' => __('Elementos del menu de la carta a mostrar',
                                     'cw_widget_domain')
        ));
    }
    // Creating widget front-end
    // This is where the action happens
    public function widget($args, $instance)
    {
        $title_elemento = apply_filters('widget_title', $instance['title']);
        $description_elemento = apply_filters('widget_description', $instance['description']);
        $precio_elemento = apply_filters('widget_description', $instance['precio']);
        $tag_menu_elemento = apply_filters('widget_description', $instance['tag_menu']);

        if (!empty($title_elemento) &  !empty($description_elemento) &
         !empty($precio_elemento) & !empty($tag_menu_elemento)){
            $tag = preg_replace('/\s+/', '_', $tag_menu_elemento);

            echo '<div class="tab-pane" id="'.$tag.'">
                    <div class="row">
                        <div class="col-lg-8 details order-2 order-lg-1">
                            <h3>'.$title_elemento.'</h3>
                            <p>'.$description_elemento.'</p>
                            <h3 class="section-title">Precio: <span>'.$precio_elemento.'€</span></h3>
                        </div>
                        <div class="col-lg-4 text-center order-1 order-lg-2">
                           <img src="" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>';
        }

    }

    // Widget Backend
    public function form($instance)
    {
        if (isset($instance['title']) & isset($instance['description']) 
        & isset($instance['precio']) & isset($instance['tag_menu'])) {
            $title = $instance['title'];
            $description = $instance['description'];
            $precio = $instance['precio'];
            $tag_menu = $instance['tag_menu'];
        } else {
            $title = __('Nuevo titulo', 'cw_widget_domain');
            $description = __('Nueva descripcion', 'cw_widget_domain');
            $precio = __('Sin precio', 'cw_widget_domain');
            $tag_menu = __('Tag del menu', 'cw_widget_domain');
        }
      // Widget admin form
?>
    <!-- TITULO -->
    <label for="<?php
            echo $this->get_field_id('title');
    ?>"><?php
            _e('Titulo:');
    ?>
    <input class="widefat" id="<?php
            echo $this->get_field_id('title');
    ?>" name="<?php
            echo $this->get_field_name('title');
    ?>" type="text" value="<?php
            echo esc_attr($title);
    ?>" />

    <!-- DESCRIPCION -->
    <label for="<?php
            echo $this->get_field_id('description');
    ?>"><?php
            _e('Descripcion:');
    ?>
    <input class="widefat" id="<?php
            echo $this->get_field_id('description');
    ?>" name="<?php
            echo $this->get_field_name('description');
    ?>" type="text" value="<?php
            echo esc_attr($description);
    ?>" />

    <!-- PRECIO -->
    <label for="<?php
            echo $this->get_field_id('precio');
    ?>"><?php
            _e('Precio:');
    ?>
    <input class="widefat" id="<?php
            echo $this->get_field_id('precio');
    ?>" name="<?php
            echo $this->get_field_name('precio');
    ?>" type="text" value="<?php
            echo esc_attr($precio);
    ?>" />

    <!-- TAG -->
    <label for="<?php
            echo $this->get_field_id('tag_menu');
    ?>"><?php
            _e('tag_menu:');
    ?>
    <input class="widefat" id="<?php
            echo $this->get_field_id('tag_menu');
    ?>" name="<?php
            echo $this->get_field_name('tag_menu');
    ?>" type="text" value="<?php
            echo esc_attr($tag_menu);
    ?>" />

    <?php
}

    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance          = array();
        $instance['title'] = (!empty($new_instance['title'])) 
                              ? strip_tags($new_instance['title']) : '';
        $instance['description'] = (!empty($new_instance['description'])) 
                              ? strip_tags($new_instance['description']) : '';
        $instance['precio'] = (!empty($new_instance['precio'])) 
                              ? strip_tags($new_instance['precio']) : '';
        $instance['tag_menu'] = (!empty($new_instance['tag_menu'])) 
                              ? strip_tags($new_instance['tag_menu']) : '';
        return $instance;
    }
} // Class cw_widget ends here


// Register and load the widget
function elem_menu_load_widget()
{
     register_widget('elem_menu_widget');
}
add_action('widgets_init', 'elem_menu_load_widget');