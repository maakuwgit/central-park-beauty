<?php

add_action( 'http_request_args', 'no_ssl_http_request_args', 10, 2 );
function no_ssl_http_request_args( $args, $url ) {
  $args['sslverify'] = false;
  return $args;
}

function ll_get_instagram_feed() {
  $user_id = '5860780830';
  $access_token = '5860780830.1677ed0.6cd761bb63bc4ad9bc80e08516165b73';
  $endpoint = 'https://api.instagram.com/v1/users/self/media/recent/';

  // get remote data
  $result = wp_remote_get( $endpoint .'?access_token='.$access_token );
  $response = $result['response']['code'];

  if ( $response !== 200 ) {

    // error handling
    $error_message = $result['response']['message'];
    $error         = "Something went wrong: $error_message";

    return $error;

  } else {

    // processing further
    $result = json_decode( $result['body'] );
    return $result->data;

  }
}


?>
