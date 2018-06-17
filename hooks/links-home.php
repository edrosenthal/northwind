<?php
	/*
	 * You can add custom links in the home page by appending them here ...
	 * The format for each link is:
		$homeLinks[] = array(
			'url' => 'path/to/link', 
			'title' => 'Link title', 
			'description' => 'Link text',
			'groups' => array('group1', 'group2'), // groups allowed to see this link, use '*' if you want to show the link to all groups
			'grid_column_classes' => '', // optional CSS classes to apply to link block. See: http://getbootstrap.com/css/#grid
			'panel_classes' => '', // optional CSS classes to apply to panel. See: http://getbootstrap.com/components/#panels
			'link_classes' => '', // optional CSS classes to apply to link. See: http://getbootstrap.com/css/#buttons
			'icon' => 'path/to/icon' // optional icon to use with the link
		);
	 */

	
	
		$homeLinks[] = array(
			'url' => 'http://localhost/northwind/orders_view.php?SortField=&SortDirection=&FilterAnd%5B1%5D=&FilterField%5B1%5D=6&FilterOperator%5B1%5D=is-empty&FilterValue%5B1%5D=', 
			'title' => 'UNSHIPPED ORDERS', 
			'description' => 'Show all orders that are not yet shipped.',
			'groups' => array('*'), // groups allowed to see this link, use '*' if you want to show the link to all groups
			'grid_column_classes' => 'col-md-4 col-lg-3', // optional CSS classes to apply to link block. See: http://getbootstrap.com/css/#grid
			'panel_classes' => 'panel-danger', // optional CSS classes to apply to panel. See: http://getbootstrap.com/components/#panels
			'link_classes' => 'btn-danger', // optional CSS classes to apply to link. See: http://getbootstrap.com/css/#buttons
			'icon' => '' // optional icon to use with the link
		);
