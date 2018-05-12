<?php
/**
 * Bites4WP - Floating Icon
 * 
 * @author Memphis McKay
 * @package Bites4WP
 * @since 1.0.0
 * 
 */

    $bites4wp = get_option( 'bites4wp' );

    $bites4wp_user = '';

    if( isset( $bites4wp[ 'user' ] ) ) {
        $bites4wp_user = $bites4wp[ 'user' ];
    }
    
    $bites4wp_url = 'https://bookandmainbites.com/' . $bites4wp_user;

    $bites4wp_desktop = 'right-center';

    if( isset( $bites4wp['position'] ) ) {
        $bites4wp_desktop = $bites4wp['position'];
    }

    $bites4wp_mobile = 'right';

    if( isset( $bites4wp['show_floating_icon_mobile'] ) ) {
        $bites4wp_mobile = $bites4wp['show_floating_icon_mobile'];
    }

    $mobile_class = 'mobile-' . $bites4wp_mobile;
    $wpbmb_class = 'biteslink ' . $bites4wp_desktop . ' ' . $mobile_class;

    $templates = new Bites4WP_Template_Loader;

    ?>
        <div class="<?php echo esc_attr( $wpbmb_class ); ?>">
        <div class="biteslink-profile-link">
        <a href="<?php echo esc_url( $bites4wp_url ); ?>" target="blank">
        
         <?php $templates->get_template_part( 'bites4wp', 'svg' ); ?>

        </a></div><!--end.wpbmb-profile-link-->
        </div><!--end.bites4wp-link-->
