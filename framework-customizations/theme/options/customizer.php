<?php
    if( ! defined( 'FW' ) ) {
        die( 'Forbidden' );
    }
    
    $options = array(
        'body-color' => array(
            'type' => 'color-picker',
            'label' => __('Body Color', TDOMAIN),
            'value' => '#ADFF2F',
        ),
        'section_first' => array(
            'title' => __('Unyson section', TDOMAIN),
            'options' => array(
                'option_first' => array(
                    'type' => 'text',
                    'value' => __('Default value', TDOMAIN),
                    'label' => __('Unyson option', TDOMAIN),
                    'desc' => __('Option description', TDOMAIN),
                ),
            ),
        ),
        'panel_1' => array(
            'title' => __('Unyson panel', TDOMAIN),
            'options' => array(
                'section_1' => array(
                    'title' => __('Unyson section #1', TDOMAIN),
                    'options' => array(
                        'option_1' => array(
                            'type' => 'text',
                            'value' => __('Default value', TDOMAIN),
                            'label' => __('Unyson option #1', TDOMAIN),
                            'desc' => __('Option description', TDOMAIN),
                        ),
                    ),
                ),
                'section_2' => array(
                    'title' => __('Unyson section #2', TDOMAIN),
                    'options' => array(
                        'option_2' => array(
                            'type' => 'text',
                            'value' => __('Default value', TDOMAIN),
                            'label' => __('Unyson option #2', TDOMAIN),
                            'desc' => __('Option description', TDOMAIN),
                        ),
                        'option_3' => array(
                            'type' => 'text',
                            'value' => __('Default value', TDOMAIN),
                            'label' => __('Unyson Option #3', TDOMAIN),
                            'desc' => __('Option description', TDOMAIN),
                        ),
                    ),
                ),
            ),
        ),
    );

