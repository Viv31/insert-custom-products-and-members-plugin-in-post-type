<?php
/**
 * Plugin Name: Insert Custom Products And memebers 
 * Plugin URI: 
 * Description: Plugin for practice Purpose.
 * Version:  1.0
 * Author: vaibhav Gangrade
 * Author URI: 
 * License:
 */  

function custom_postype_for_member(){
	register_post_type('member',
		// CPT Options
		array(
			'labels'=>array(
				'name'=>__('member'),
				'Singular_name'=>__('member')

			),
			'supports'=>array('title','editor','thumbnail'),//Used for adding featured image
			'public'=>true,
			'has_archive'=>true,
			'rewrite'=>array('slug'=>'member')
		)
	);
}
// Hooking up our function to theme setup
add_action('init','custom_postype_for_member');



/*Create Custom Post type when install plugin*/


function add_products_items(){
	register_post_type('Products',
		array(
			'labels'=>array(
				'name'=>__('products'),
				'Singular_name'=>__('products')

			),
			'supports'=>array('title','editor','thubnail'),
			'public'=>true,
			'has_archive'=>true,
			'rewrite'=>array('slug'=>'products')

		)

	);
}

add_action('init','add_products_items');



?>