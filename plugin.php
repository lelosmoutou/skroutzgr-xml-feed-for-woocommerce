<?php

/**
 * Copyright (C) 2015 Panagiotis Vagenas <pan.vagenas@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/* -- WordPress® --------------------------------------------------------------------------------------------------------------------------

Version: 150707
Stable tag: 150707
Tested up to: 4.2.2
Requires at least: 3.5.1

Requires at least Apache version: 2.1
Tested up to Apache version: 2.4.7

Requires at least PHP version: 5.3.1
Tested up to PHP version: 5.5.12

Copyright: © 2015 Panagiotis Vagenas <pan.vagenas@gmail.com
License: GNU General Public License
Contributors: pan.vagenas

Author: Panagiotis Vagenas <pan.vagenas@gmail.com>
Author URI: http://gr.linkedin.com/in/panvagenas

Text Domain: skroutz-xml-feed
Domain Path: /translations

Plugin Name: Skroutz.gr XML Feed
Plugin URI: https://github.com/panvagenas/skroutz-xml-feed

Description: Generate XML sheet according to skroutz.gr specs

Tags: skroutz, skroutz.gr, XML, generate XML, price comparison

Kudos: WebSharks™ http://www.websharks-inc.com

-- end section for WordPress®. --------------------------------------------------------------------------------------------------------- */

namespace skroutz {

	if ( ! defined( 'WPINC' ) ) {
		die;
	}
	require_once dirname( __FILE__ ) . '/includes/SimpleXMLExtended.php';

	require_once dirname( __FILE__ ) . '/classes/skroutz/framework.php';
}
