<?php
/**
 * To add social media icons
 *
 *
 * @package shoplux-cstm
 */

?>

<?php
function my_customizer_social_media_array()
{

    /* store social site names in array */
    $social_sites =
        array(
            'twitter',
            'facebook',
            'google-plus',
            'flickr',
            'pinterest',
            'youtube',
            'tumblr',
            'dribbble',
            'rss',
            'linkedin',
            'instagram',
            'email'
        );

    return $social_sites;
}

/* add settings to create various social media text areas. */
add_action('customize_register', 'my_add_social_sites_customizer');
function my_add_social_sites_customizer($wp_customize)
{
    $wp_customize->add_section(
        'my_social_settings',
        array(
            'title' => __('Social Media Icons', 'text-domain'),
            'priority' => 35,
        )
    );

    $social_sites = my_customizer_social_media_array();
    $priority = 5;

    foreach ($social_sites as $social_site) {
        $wp_customize->add_setting(
            "$social_site",
            array(
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
            )
        );

        $wp_customize->add_control(
            $social_site,
            array(
                'label' => __("$social_site url:", 'text-domain'),
                'section' => 'my_social_settings',
                'type' => 'text',
                'priority' => $priority,
            )
        );
        $priority = $priority + 5;
    }
}

/* takes user input from the customizer and outputs linked social media icons */
function my_social_media_icons()
{
    $social_sites = my_customizer_social_media_array();

    /* any inputs that aren't empty are stored in $active_sites array */
    foreach ($social_sites as $social_site) {
        if (strlen(get_theme_mod($social_site)) > 0) {
            $active_sites[] = $social_site;
        }
    }

    /* for each active social site, add it as a list item */
    if (!empty($active_sites)) {
        echo '<div class="d-inline-flex align-items-center">';
        foreach ($active_sites as $active_site) {

            /* setup the class */
            $class = 'fab fa-' . $active_site;
            if ($active_site == 'email') {
?>
<a class="text-dark px-2" target="_blank"
    href="mailto:<?php echo antispambot(is_email(get_theme_mod($active_site))); ?>">
    <i class="fa fa-envelope" title="<?php _e('email', 'text-domain'); ?>"></i>
</a>

<?php
            } else { ?>
<a class="text-dark px-2 <?php echo $active_site; ?>" target="_blank"
    href="<?php echo esc_url(get_theme_mod($active_site)); ?>">
    <i class="<?php echo esc_attr($class); ?>" title="<?php printf(__('%s', 'text-domain'), $active_site); ?>"></i>
</a>
<?php
            }
        }
        echo '</div>';
    }
}

?>