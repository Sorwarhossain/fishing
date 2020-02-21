<?php if(get_field( 'enable_footer_widgets', 'options' ) && is_active_sidebar( 'footer-sidebar' )): 
    
$widget_bg = get_field( 'widgets_background_image', 'options' )? get_field( 'widgets_background_image', 'options' ) : '';
?>

<div class="tm-footer-toparea tm-padding-section" data-bgimage="<?php echo $widget_bg; ?>" data-black-overlay="9">
    <div class="container">
        <div class="widgets widgets-footer row">

            <?php dynamic_sidebar( 'footer-sidebar' ); ?>

        </div>
    </div>
</div>


<?php endif; ?>