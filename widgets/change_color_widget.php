<?php
// Creating the widget
class change_color_widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
        // Base ID of your widget
            'change_color_widget',
        // Widget name will appear in UI
            __('Danim0reno - Cambia color página', 'cw_widget_domain'),
        // Widget description
            array(
            'description' => __('Cambia el color a las fuentes y botones',
                                     'cw_widget_domain')
        ));
    }
    // Creating widget front-end
    // This is where the action happens
    public function widget($args, $instance)
    {
        $title_color = apply_filters('widget_description', $instance['color']);
        if (!empty($title_color)){
            echo '<style>
            h2 span {
                color: '.$title_color.' !important;
            }
    
            #head .btn-carta, #head .btn-book {
                border: 2px solid '.$title_color.' !important;
            }
    
            .navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover>a {
                color: '.$title_color.' !important;
            }
    
            .carta #carta-flters li:hover, .carta #carta-flters li.filter-active {
                background: '.$title_color.' !important;
            }
    
            .carta #carta-flters li {
                border: '.$title_color.' !important;
            }
    
            .carta .carta-content a {
                color: '.$title_color.' !important;
            }
    
            #head .btn-carta:hover, #head .btn-book:hover {
                background: '.$title_color.';
                color: #fff;
            }
            .specials .nav-link.active  {
                color: '.$title_color.' !important;
                border-color: '.$title_color.' !important;
            }
            
            .specials .nav-link:hover {
                color: '.$title_color.' !important;
            }
    
            @media (max-width: 992px) {
                .specials .nav-link.active {
                    color: #fff !important;
                    background: '.$title_color.' !important;
                }
            }
    
            .contact .info i {
                color: '.$title_color.' !important;
            }
    
            .contact .info:hover i {
                background: '.$title_color.' !important;
                color: #fff !important;
            }
    
            .info-wrap a {
                color: '.$title_color.' !important;
            }
    
            .contact .php-email-form button[type=submit] {
                background: '.$title_color.' !important;
                color: #fff !important;
            }
    
            #footer h3 {
                color: '.$title_color.' !important;
            }
    
            .copyright a{
                color: '.$title_color.' !important;
            }
    
            .back-to-top {
                background: '.$title_color.' !important;
            }
        </style>';
        }
    }
    // Widget Backend
    public function form($instance)
    {
        if (isset($instance['color'])) {
            $title = $instance['color'];
        } else {
            $title = __('COLOR', 'cw_widget_domain');
        }
      // Widget admin form
?>
    <label for="<?php
            echo $this->get_field_id('color');
    ?>"><?php
            _e('Seleccione color:');
    ?>
    <input class="widefat" id="<?php
            echo $this->get_field_id('color');
    ?>" name="<?php
            echo $this->get_field_name('color');
    ?>" type="color" value="<?php
            echo esc_attr($title);
    ?>" />
    <?php
    }
    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance          = array();
        $instance['color'] = (!empty($new_instance['color'])) 
                              ? strip_tags($new_instance['color']) : '';
        return $instance;
    }
} // Class cw_widget ends here


// Register and load the widget
function change_color_load_widget()
{
     register_widget('change_color_widget');
}
add_action('widgets_init', 'change_color_load_widget');