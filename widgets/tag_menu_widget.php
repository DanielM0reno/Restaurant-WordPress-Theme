<?php
// Creating the widget
class tag_menu_widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
        // Base ID of your widget
            'tag_menu_widget',
        // Widget name will appear in UI
            __('Danim0reno - Tag nombre menu', 'cw_widget_domain'),
        // Widget description
            array(
            'description' => __('Nombre de los tags de los menus',
                                     'cw_widget_domain')
        ));
    }
    // Creating widget front-end
    // This is where the action happens
    public function widget($args, $instance)
    {
        $title_tag = apply_filters('widget_title', $instance['title']);
        echo $args['before_widget'];
        if (!empty($title_tag))
            $tag = preg_replace('/\s+/', '_', $title_tag);
            echo '<li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#'.$tag.'">'.$title_tag.'</a>
                    </li>';
        echo $args['after_widget'];

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
            _e('Introduzca tag del MENU:');
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
function tag_menu_load_widget()
{
     register_widget('tag_menu_widget');
}
add_action('widgets_init', 'tag_menu_load_widget');