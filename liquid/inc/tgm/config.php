<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Liquid for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';

function liquid_register_required_plugins() {
    $plugins = array(
        // 推奨プラグイン
        array(
            'name'      => 'LIQUID BLOCKS',
            'slug'      => 'liquid-blocks',
            'required'  => false,
        ),
    );

    $config = array(
        'id'           => 'liquid',
        'menu'         => 'tgmpa-install-plugins',
        'has_notices'  => true,
        'dismissable'  => true,
        'is_automatic' => false,

        'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'liquid' ),
			'menu_title'                      => __( 'Install Plugins', 'liquid' ),
			// translators: %s: plugin name.
			'installing'                      => __( 'Installing Plugin: %s', 'liquid' ),
			// translators: %s: plugin name.
			'updating'                        => __( 'Updating Plugin: %s', 'liquid' ),
            'notice_can_install_required'     => _n_noop(
				// translators: 1: plugin name(s).
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'liquid'
			),
			'notice_can_install_recommended'  => _n_noop(
				// translators: 1: plugin name(s).
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'liquid'
			),
			'notice_ask_to_update'            => _n_noop(
				// translators: 1: plugin name(s).
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'liquid'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				// translators: 1: plugin name(s).
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'liquid'
			),
			'notice_can_activate_required'    => _n_noop(
				// translators: 1: plugin name(s).
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'liquid'
			),
			'notice_can_activate_recommended' => _n_noop(
				// translators: 1: plugin name(s).
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'liquid'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'liquid'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'liquid'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'liquid'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'liquid' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'liquid' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'liquid' ),
			// translators: 1: dashboard link.
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'liquid' ),
			'dismiss'                         => __( 'Dismiss this notice', 'liquid' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'liquid' ),
		),
    );

    tgmpa($plugins, $config);
}
add_action('tgmpa_register', 'liquid_register_required_plugins');
