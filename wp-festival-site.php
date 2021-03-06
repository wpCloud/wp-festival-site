<?php
/**
 * Plugin Name: Festival Sites
 * Plugin URI: http://wpCloud.io
 * Description: Adds network support for festival sites.
 * Author: Usability Dynamics, Inc
 * Version: 0.1.0
 * Network: true
 * Vertical: true
 * Author URI: http://wpCloud.io
 * Text Domain: wp-festival-site
 * Domain Path: /static/locale/
 *
 * GitHub Plugin URI: wpCloud/wp-festival-site
 *
 * Copyright 2011-2014  Usability Dynamics, Inc.   (email : info@UsabilityDynamics.com)
 *
 * Created by Usability Dynamics, Inc
 * (website: UsabilityDynamics.com       email : info@UsabilityDynamics.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 3 of the License.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @author Andy Potanin <andy.potanin@usabilitydynamics.com>
 */

add_action( 'network_admin_menu', function() {

  // add_submenu_page( 'settings.php', 'My Custom Submenu Page', 'My Custom Submenu Page', 'manage_options', 'my-custom-submenu-page', 'my_custom_submenu_page_callback' );

});

add_action( 'admin_init', function() {

});