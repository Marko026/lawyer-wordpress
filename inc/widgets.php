<?php

/**
 * Adds Services widget.
 */
class ServicesWidget extends WP_Widget
{

    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'services_widget', // Base ID
            'Lawyer services Widget', // Name
            array('description' => __('Lawyer services', 'Lawyer'),) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);

        echo $before_widget;
        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }

        $queryArgs = [
            "posts_per_page" => 2,
            "post_type" => "our_services",
            "orderby" => "rand"
        ];
        $services = new WP_Query($queryArgs);

        while ($services->have_posts()) {
            $services->the_post();
?>
            <article class="service-item animation" data-animation="slide-top">
                <a href="<?php the_permalink(); ?>" class="d-flex align-items-center">
                    <figure class="mb-0">
                        <img src="<?php the_field('service_icon') ?>" alt="" />
                    </figure>
                    <span class="text-uppercase h6 pl-4"><?php the_title(); ?></span>
                </a>
            </article>
        <?php
        }


        wp_reset_postdata();

        echo $after_widget;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'text_domain');
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
<?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';

        return $instance;
    }
} // class ServicesWidget

?>
<?php
// Register Services widget

function lawyer_custom_widget()
{
    register_widget('ServicesWidget');
}
add_action('widgets_init', 'lawyer_custom_widget');
?>