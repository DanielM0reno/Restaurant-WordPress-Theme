<?php
// Creating the widget
class map_widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
        // Base ID of your widget
            'map_widget',
        // Widget name will appear in UI
            __('Danim0reno - Ubicacion GoogleMaps', 'cw_widget_domain'),
        // Widget description
            array(
            'description' => __('Localizacion mediante Google Maps',
                                     'cw_widget_domain')
        ));
    }
    // Creating widget front-end
    // This is where the action happens
    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance['title']);
        if (!empty($title)){
            echo '<div class="map"><iframe style="border:0; width: 100%; height: 350px;" src="'.$title.'"
                frameborder="0" allowfullscreen></iframe></div>';
        }
    }
    // Widget Backend
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'cw_widget_domain');
        }
      // Widget admin form
?>
<label for="<?php
        echo $this->get_field_id('title');
?>"><?php
        _e('Introduce iframe src="???" de GoogleMaps:');
?>
<input class="widefat" id="<?php
        echo $this->get_field_id('title');
?>" name="<?php
        echo $this->get_field_name('title');
?>" type="text" value="<?php
        echo esc_attr($title);
?>" />
<?php
    }
    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
{
        $instance          = array();
        $instance['title'] = (!empty($new_instance['title'])) 
                              ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
} // Class cw_widget ends here
// Register and load the widget
function map_load_widget()
{
     register_widget('map_widget');
}
add_action('widgets_init', 'map_load_widget');