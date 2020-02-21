<?php

/**
 * get the prelaoder html
 * @since 1.0.0
 */
function get_fishing_preloader(){

    $return_html = null;

    if(get_field('enable_preloader', 'options')){

        $preloader_image = get_field('preloader-image', 'options');
        $loader_logo = $preloader_image ? '<img src="'. $preloader_image .'" alt="logo">' : '';

        $return_html = '
        <div class="tm-preloader">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="tm-preloader-logo">
                            '. $loader_logo .'
                        </div>
                        <span class="tm-preloader-progress"></span>
                    </div>
                </div>
            </div>
        </div>
        ';


    }

    return $return_html;

}




/**
 * get the site main logo
 * @since 1.0.0
 */
function get_fishing_logo(){

    $logo = get_field('site_logo', 'options');
    $site_logo = $logo ? '<img src="'. $logo .'" alt="malic">' : '<h1>FISHING THINGS</h1>';

    $return_html = '
    <a href="'. get_home_url() .'" class="tm-header-logo">
        '. $site_logo .'
    </a>
    ';

    return $return_html;

}



/**
 * get the site top bar
 * @since 1.0.0
 */
function get_fishing_topbar(){

    $return_html = null;

    if(get_field( 'enable_header_topbar', 'options' )){

        $phone = get_field('phone_number', 'options');
        $phone_number = $phone ? '<li><a href="tel:'. $phone .'"><i class="ion-ios-telephone"></i>'. $phone .'</a></li>' : '';

        $email = get_field('email_address', 'options');
        $email_address = $email ? '<li><a href="mailto:'. $email .'"><i class="ion-android-mail"></i>'. $email .'</a></li>' : '';

		$link = '';
        $label = '';
        
		if(is_user_logged_in()){
            $link = wp_logout_url();
            $label = "Log Out";
        } else {
        	$account = get_field('account_button', 'options');      
            if(is_array($account)){
                $link = !empty($account['link']) ? $account['link']: '';
                $label = !empty($account['label']) ? $account['label']: '';
            }
        }
        
        
        

        $return_html = '
        <div class="tm-header-toparea">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-12">
                        <ul class="tm-header-info">
                            '. $phone_number .'
                            '. $email_address .'
                        </ul>
                    </div>
                    <div class="col-lg-4 col-12">
                        <ul class="tm-header-icons">
                            <li><a href="'. $link .'">'. $label .'</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        ';
    } 

    return $return_html;

}