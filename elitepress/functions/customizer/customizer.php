<?php

/* * *********************** Theme Customizer with Sanitize function ******************************** */

function elitepress_sanitize_fn($wp_customize) {


    if (!function_exists('elitepress_select2_text_sanitization')) {

        function elitepress_select2_text_sanitization($input) {
            if (strpos($input, ',') !== false) {
                $input = explode(',', $input);
            }
            if (is_array($input)) {
                foreach ($input as $key => $value) {
                    $input[$key] = sanitize_text_field($value);
                }
                $input = implode(',', $input);
            } else {
                $input = sanitize_text_field($input);
            }
            return $input;
        }

    }

    //radio box sanitization function
    function elitepress_sanitize_radio($input, $setting) {

        $input = sanitize_key( $input );
    
    // Get list of choices from the control
    // associated with the setting
    $choices = $setting->manager->get_control( $setting->id )->choices;
    
    // If the input is a valid key, return it;
    // otherwise, return the default
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
    }

    //select sanitization function
    function elitepress_sanitize_select($input, $setting) {

        $input = sanitize_key($input);

        $choices = $setting->manager->get_control($setting->id)->choices;

        //return if valid
        return ( array_key_exists($input, $choices) ? $input : $setting->default );
    }
}

add_action('customize_register', 'elitepress_sanitize_fn');
