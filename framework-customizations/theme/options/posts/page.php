<?php


if ( ! defined('FW') ){
    die('Forbidden');
}

$options = array(
    'option_id' => array(
        'type'  => 'text',
        'value' => 'Default value',
        'label' => __('Option Label', TDOMAIN),
        'desc'  => __('Option Description', TDOMAIN),
        'attr'  => array(
            'class' => 'custom-class',
            'data-foo' => 'bar'
        ),
        'help'  => __('Some html that will appear in tip popup', TDOMAIN),
    ),
    'box_id' => array(
        'type' => 'box',
        'options' => array(
            'option_id_2'  => array(
                'type' => 'text',
                'value' => 'Default value',
                'label' => __('Option Label', TDOMAIN),
                'desc'  => __('Option Description', TDOMAIN),
            ),
            'tab_id' => array(
                'type' => 'tab',
                'options' => array(
                    'option_id_5'  => array( 'type' => 'text' ),
                ),
                'title' => __('Tab Title', TDOMAIN),
                'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
            ),
            'tab_id_2' => array(
                'type' => 'tab',
                'options' => array(
                    'option_id_6'  => array( 'type' => 'text' ),
                ),
                'title' => __('Tab Title #2', TDOMAIN),
                'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
            ),
        ),
        'title' => __('Box Title', TDOMAIN),
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar')
    ),
    'popup_id' => array(
        'type' => 'popup',
        'options' => array(
            'option_id_3'  => array( 'type' => 'text' ),
        ),
        'title' => __('Button and Popup Title', TDOMAIN),
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
        'modal-size' => 'small', // small, medium, large
        'desc' => __('Button Description', TDOMAIN),
    ),
    'group_id' => array(
        'type' => 'group',
        'options' => array(
            'option_id_4'  => array( 'type' => 'text' ),
        ),
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
    ),


);