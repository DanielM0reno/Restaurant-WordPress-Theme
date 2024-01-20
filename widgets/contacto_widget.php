<?php
// Creating the widget
class contacto_widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
        // Base ID of your widget
            'contacto_widget',
        // Widget name will appear in UI
            __('Danim0reno - Informacion contacto', 'cw_widget_domain'),
        // Widget description
            array(
            'description' => __('Informacion de contacto de la empresa',
                                     'cw_widget_domain')
        ));
    }
    // Creating widget front-end
    // This is where the action happens
    public function widget($args, $instance)
    {
        $direccion_elemento = apply_filters('widget_description', $instance['direccion']);
        $email_elemento = apply_filters('widget_description', $instance['email']);
        $horario_elemento = apply_filters('widget_description', $instance['horario']);
        $telefono_elemento = apply_filters('widget_description', $instance['telefono']);
       
        if (!empty($direccion_elemento) &  !empty($email_elemento) &
         !empty($horario_elemento) & !empty($telefono_elemento)){

            echo '<div class="col-lg-3 col-md-6 info">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Visitanos:</h4>
                    <p>'.$direccion_elemento.'</p>
                </div>';
            echo '<div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                    <i class="bi bi-clock"></i>
                    <h4>Horario apertura:</h4>
                    <p>'.$horario_elemento.'</p>
                </div>';
            echo '<div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>'. $email_elemento.'</p>
                </div>';
            echo '<div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                    <i class="bi bi-phone"></i>
                    <h4>Llamanos:</h4>
                    <p><a href="tel:'.$telefono_elemento.'">'.$telefono_elemento.'</a></p>
                </div>';
        }

    }
    // Widget Backend
    public function form($instance)
    {
        if (isset($instance['direccion']) & isset($instance['email']) 
        & isset($instance['horario']) & isset($instance['telefono'])) {
            $direccion = $instance['direccion'];
            $email = $instance['email'];
            $horario = $instance['horario'];
            $telefono = $instance['telefono'];
           
        } else {
            $direccion = __('Nuevo direccion', 'cw_widget_domain');
            $email = __('Nueva email', 'cw_widget_domain');
            $horario = __('Lun-Dom: \n 00:00 - 22:00', 'cw_widget_domain');
            $telefono = __('+00 000 000 000', 'cw_widget_domain');
        }
      // Widget admin form
?>
    <!-- DIRECCION -->
    <label for="<?php
            echo $this->get_field_id('direccion');
    ?>"><?php
            _e('Direccion:');
    ?>
    <input class="widefat" id="<?php
            echo $this->get_field_id('direccion');
    ?>" name="<?php
            echo $this->get_field_name('direccion');
    ?>" type="text" value="<?php
            echo esc_attr($direccion);
    ?>" />

    <!-- EMAIL -->
    <label for="<?php
            echo $this->get_field_id('email');
    ?>"><?php
            _e('Email:');
    ?>
    <input class="widefat" id="<?php
            echo $this->get_field_id('email');
    ?>" name="<?php
            echo $this->get_field_name('email');
    ?>" type="text" value="<?php
            echo esc_attr($email);
    ?>" />

    <!-- HORARIO -->
    <label for="<?php
            echo $this->get_field_id('horario');
    ?>"><?php
            _e('Horario:');
    ?>
    <input class="widefat" id="<?php
            echo $this->get_field_id('horario');
    ?>" name="<?php
            echo $this->get_field_name('horario');
    ?>" type="text" value="<?php
            echo esc_attr($horario);
    ?>" />

    <!-- TELEFONO -->
    <label for="<?php
            echo $this->get_field_id('telefono');
    ?>"><?php
            _e('Telefono:');
    ?>
    <input class="widefat" id="<?php
            echo $this->get_field_id('telefono');
    ?>" name="<?php
            echo $this->get_field_name('telefono');
    ?>" type="text" value="<?php
            echo esc_attr($telefono);
    ?>" />

    <?php
}

    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance          = array();
        $instance['direccion'] = (!empty($new_instance['direccion'])) 
                              ? strip_tags($new_instance['direccion']) : '';
        $instance['email'] = (!empty($new_instance['email'])) 
                              ? strip_tags($new_instance['email']) : '';
        $instance['horario'] = (!empty($new_instance['horario'])) 
                              ? strip_tags($new_instance['horario']) : '';
        $instance['telefono'] = (!empty($new_instance['telefono'])) 
                              ? strip_tags($new_instance['telefono']) : '';
        return $instance;
    }
} // Class cw_widget ends here


// Register and load the widget
function contacto_load_widget()
{
     register_widget('contacto_widget');
}
add_action('widgets_init', 'contacto_load_widget');