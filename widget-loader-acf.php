<?php

$key = 'widget_block_links';
$widgetplacement = self::$config['tab_placement'];

$widget_config =array (
	'key' => $key,
	'name' => 'block_links',
	'label' => 'Block links',
	'sub_fields' => array (
		array (
			'key' => $key . '_basic_details_tab',
			'label' => 'Basic Details',
			'type' => 'tab',
			'placement' => $widgetplacement,
		),
		array (
			'key' => $key . '_blocks',
			'label' => 'Blocks',
			'name' => 'blocks',
			'type' => 'repeater',
			'instructions' => 'Minimum of 2 blocks',
			'min' => 2,
			'layout' => 'table',
			'button_label' => 'Add block',
			'sub_fields' => array (
				array (
					'key' => $key . '_background_image',
					'label' => 'Background image',
					'name' => 'background_image',
					'type' => 'image',
					'required' => 1,
					'return_format' => 'array',
					'preview_size' => 'medium',
					'library' => 'all',
				),
				array (
					'key' => $key . '_title',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
					'required' => 1,
				),
				array (
					'key' => $key . '_sell',
					'label' => 'Sell',
					'name' => 'sell',
					'type' => 'text',
				),
				array (
					'key' => $key . '_link',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'text',
					'instructions' => "External link example:<br> http://www.google.co.uk <br><br>Internal link example:<br> /food-guide",
					'required' => 1,
				),
				array (
					'key' => $key . '_feature_block',
					'label' => 'Feature block',
					'name' => 'feature_block',
					'type' => 'true_false',
				)
			),
			array (
				'key' => $key . '_advanced_details_tab',
				'label' => 'Advanced Details',
				'type' => 'tab',
				'placement' => $widgetplacement,
			)
		)
	)
);

$widget_config["content-types"] = get_option("options_" . $key . "_available_post_types");

$widget_config["content-sizes"] = array('main');
