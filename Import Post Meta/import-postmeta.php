<?php
	// create an array from a csv
	$meta= array_map('str_getcsv', file(get_template_directory() . '/pick.csv'));
	
	var_dump($meta_field);
	
	//loop through array to set each row in CSV 
	foreach($meta as $meta_field){
		// first column will always be the post_ID
		$post_id = $meta_field[0];
		 
		// if there is a value for the post_meta update post 
		// must be in same order as columns in CSV 
		// i.e. post_ID = index 0 / column A
		// dummy_type = index 1 / column B
	   if(isset($meta_field[1])){
			update_post_meta($post_id, 'dummy_type', $meta_field[1]);
		}else{
			add_user_meta($post_id, 'dummy_type', $meta_field[1]);
		}
		if(isset($meta_field[2])){
			update_post_meta($post_id, 'dum_symbol', $meta_field[2]);
		}else{
			add_user_meta($post_id, 'dum_symbol', $meta_field[2]);
		}
		if(isset($meta_field[3])){
			update_post_meta($post_id, 'dum_start_date', $meta_field[3]);
		}else{
			add_user_meta($post_id, 'dum_start_date', $meta_field[3]);
		}
	   if(isset($meta_field[4])){
			update_post_meta($post_id, 'dum_stop_date', $meta_field[4]);
		}else{
			add_user_meta($post_id, 'dum_stop_date', $meta_field[4]);
		}
		if(isset($meta_field[5])){
			update_post_meta($post_id, 'dum_message', $meta_field[5]);
		}else{
			add_user_meta($post_id, 'dum_message', $meta_field[5]);
		}
	}		