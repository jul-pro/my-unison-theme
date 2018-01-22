<?php

if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'main' => array(
        'type' => 'box',
        'title' => __('Testing Options', TDOMAIN),
        'options' => array(
            'body-color' => array(
                'type' => 'color-picker',
                'label' => __('Body Color', TDOMAIN),
                'value' => '#CDFF2F',
            ),
        ),
    ),
);

