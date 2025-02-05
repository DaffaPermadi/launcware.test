<?php
/*
Plugin Name: Custom JWT API
Description: Custom API dengan JWT Authentication
*/

add_action('rest_api_init', function () {
    register_rest_route('custom/v1', '/data/', array(
        'methods'  => 'GET',
        'callback' => 'get_custom_data',
        'permission_callback' => function () {
            return is_user_logged_in();
        }
    ));
});

function get_custom_data() {
    return new WP_REST_Response(['message' => 'Hello, Launchware User!'], 200);
}
