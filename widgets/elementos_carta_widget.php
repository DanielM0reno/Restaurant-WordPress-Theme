<?php
// Creating the widget
class elem_widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
        // Base ID of your widget
            'elem_widget',
        // Widget name will appear in UI
            __('Danim0reno - Elementos carta', 'cw_widget_domain'),
        // Widget description
            array(
            'description' => __('Elementos de la carta a mostrar',
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
        $categoria_elemento = apply_filters('widget_description', $instance['categoria']);
        $alergeno_elemento = apply_filters('widget_description', $instance['alergeno']);

        if (!empty($title_elemento) &  !empty($description_elemento) &
         !empty($precio_elemento) & !empty($categoria_elemento) & !empty($alergeno_elemento)){
            echo '<div class="col-lg-6 carta-item filter-'.$categoria_elemento.'">
                    <div class="carta-content">
                        <a>'.$title_elemento.'</a><span>'.$precio_elemento.'€</span>
                    </div>
                    <div class="carta-ingredients">
                        '.$description_elemento.' <br><strong>Alergenos: '.$alergeno_elemento.'</strong>
                    </div>
                </div>';
        }

    }
    // Widget Backend
    public function form($instance)
    {
        if (isset($instance['title']) & isset($instance['description']) 
        & isset($instance['precio']) & isset($instance['categoria']) & isset($instance['alergeno'])) {
            $title = $instance['title'];
            $description = $instance['description'];
            $precio = $instance['precio'];
            $categoria = $instance['categoria'];
            $alergeno = $instance['alergeno'];
        } else {
            $title = __('Nuevo titulo', 'cw_widget_domain');
            $description = __('Nueva descripcion', 'cw_widget_domain');
            $precio = __('0', 'cw_widget_domain');
            $categoria = __('Categoria', 'cw_widget_domain');
            $alergeno = __('Listado alergenos', 'cw_widget_domain');
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

    <!-- CATEGORIA -->
    <label for="<?php
            echo $this->get_field_id('categoria');
    ?>"><?php
            _e('Categoria:');
    ?>
    <input class="widefat" id="<?php
            echo $this->get_field_id('categoria');
    ?>" name="<?php
            echo $this->get_field_name('categoria');
    ?>" type="text" value="<?php
            echo esc_attr($categoria);
    ?>" />

    <!-- ALERGENO -->
    <label for="<?php
            echo $this->get_field_id('alergeno');
    ?>"><?php
            _e('Alergenos:');
    ?>
    <input class="widefat" id="<?php
            echo $this->get_field_id('alergeno');
    ?>" name="<?php
            echo $this->get_field_name('alergeno');
    ?>" type="text" value="<?php
            echo esc_attr($alergeno);
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
        $instance['categoria'] = (!empty($new_instance['categoria'])) 
                              ? strip_tags($new_instance['categoria']) : '';
        $instance['alergeno'] = (!empty($new_instance['alergeno'])) 
                              ? strip_tags($new_instance['alergeno']) : '';
        return $instance;
    }
} // Class cw_widget ends here


// Register and load the widget
function elem_load_widget()
{
     register_widget('elem_widget');
}
add_action('widgets_init', 'elem_load_widget');