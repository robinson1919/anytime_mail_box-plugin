<?php

function anytimemailbox_results() { 
    
    
    if(isset($_POST['first_name'])) {
        $name = $_POST['first_name'];
    }
    if(isset($_POST['last_name'])) {
        $last_name = $_POST['last_name'];
    }
    if(isset($_POST['company'])) {
        $company = $_POST['company'];
    }
    if(isset($_POST['address_line_1'])) {
        $address = $_POST['address_line_1'];
    }
    if(isset($_POST['address_line_2'])) {
        $addicionalAddress = $_POST['address_line_2'];
    }
    if(isset($_POST['zip_postal_code'])) {
        $zipCode = $_POST['zip_postal_code'];
    }
    if(isset($_POST['city'])) {
        $city = $_POST['city'];
    }
    if(isset($_POST['state_province'])) {
        $state = $_POST['state_province'];
    }
    if(isset($_POST['country'])) {
        $country = $_POST['country'];
    }
    if(isset($_POST['phone_country_code'])) {
        $phoneCode = $_POST['phone_country_code'];
    }
    if(isset($_POST['phone_local_number'])) {
        $phone = $_POST['phone_local_number'];
    }
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
    }    

    $post = array(
        'first_name' => $name,
        'last_name' => $last_name,
        'company' => $company,
        'address_line_1' => $address,
        'address_line_2' => $addicionalAddress,
        'zip_postal_code' => $zipCode,
        'city' => $city,
        'state_province' => $state,
        'country' => $country,
        'phone_country_code' => $phoneCode,
        'phone_local_number' => $phone,
        'email' => $email,
        'notify' => 'true'
    );


    $url = 'https://connect.anytimemailbox.com/v1/renters';
    $headers = array(
        'Content-type' => 'application/x-www-form-urlencoded',
        'Authorization' => 'Bearer j0a7cJrjaOcQ9JXP3XdV2FAp'
    );

    $args = array(
        'method' => 'POST',
        'timeout'     => 45,
        'redirection' => 5,
        'httpversion' => '1.0',
        'blocking'    => true,
        'headers' => $headers,
        'sslverify' => false,
        'body' => $post,
        'cookies' => array()
    );

    $response = wp_remote_post( $url, $args );

    if ( is_wp_error( $response ) ) {
        $error_message = $response->get_error_message();
        echo "Something went wrong: $error_message";
    }else {
        echo json_encode($response);
    }

    die();
}
  
add_action( 'wp_ajax_nopriv_anytimemailbox_results', 'anytimemailbox_results' );
add_action( 'wp_ajax_anytimemailbox_results', 'anytimemailbox_results' );
