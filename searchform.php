<?php
/**
 * The searchform for our theme
 *
 * This is the template that displays the searchform of the website
 *
 *
 * @package shoplux-cstm
 */

?>

<?php
$placeholder = __('Search', 'woocommerce') . '&hellip;';
if (get_theme_mod('search_placeholder'))
    $placeholder = get_theme_mod('search_placeholder');
?>

<form method="get" action="<?php echo esc_url(home_url('/')); ?>" id="searchform" role="search">
    <div class="input-group">
        <input type="search" class="form-control" name="s" value="<?php echo esc_attr(get_search_query()); ?>" id="s"
            placeholder="<?php echo $placeholder; ?>" />
        <div class="input-group-append">
            <button type="submit" class="input-group-text bg-transparent text-primary">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
    <!-- <div class="live-search-results text-left z-top"></div> -->
</form>