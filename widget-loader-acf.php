<?php

$key = 'block_links';
$widgetplacement = self::$config['tab_placement'];

$widget_config =array (
	'key' => 'widget_' . $key,
	'name' => $key,
	'label' => 'Block links',
	'sub_fields' => array (
		array (
			'key' => 'widget_' . $key . '_basic_details_tab',
			'label' => 'Basic Details',
			'type' => 'tab',
			'placement' => $widgetplacement,
		),
		array (
			'key' => 'widget_' . $key . '_blocks',
			'label' => 'Blocks',
			'name' => 'blocks',
			'type' => 'repeater',
			'instructions' => 'Minimum of 2 blocks',
			'min' => 2,
			'layout' => 'table',
			'button_label' => 'Add block',
			'sub_fields' => array (
				array (
					'key' => 'widget_' . $key . '_background_image',
					'label' => 'Background image',
					'name' => 'background_image',
					'type' => 'image',
					'required' => 1,
					'return_format' => 'url',
					'preview_size' => 'medium',
					'library' => 'all',
				),
				array (
					'key' => 'widget_' . $key . '_title',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
					'required' => 1,
				),
				array (
					'key' => 'widget_' . $key . '_sell',
					'label' => 'Sell',
					'name' => 'sell',
					'type' => 'text',
				),
				array (
					'key' => 'widget_' . $key . '_link',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'url',
				),
				array (
					'key' => 'widget_' . $key . '_feature_block',
					'label' => 'Feature block',
					'name' => 'feature_block',
					'type' => 'true_false',
				)
			),
			array (
				'key' => 'widget_' . $key . '_advanced_details_tab',
				'label' => 'Advanced Details',
				'type' => 'tab',
				'placement' => $widgetplacement,
			)
		)
	)
);

$widget_config["content-types"] = array('category', 'page');
$widget_config["content-sizes"] = array('main');
