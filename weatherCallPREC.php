<?php /* Template Name: php result */ ?>

<?php
$request = wp_remote_get( 'https://spidimaps.s3-us-east-2.amazonaws.com/qpf_validtimes.json' );

if( is_wp_error( $request ) ) {
	return false; // Bail early
}

$body = wp_remote_retrieve_body( $request );

$data2 = json_decode( $body );

$test = "test";

function debug_to_console($data) {
    $output = $data;
    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

echo($body);
