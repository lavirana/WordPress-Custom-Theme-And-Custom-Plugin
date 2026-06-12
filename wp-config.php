<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordtheme' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0k#37LwoQpn%Ze5B@iJtVRuRWDs_nW|;IMXBuR46+M-S4.R1G2]kyjE@2vq|chG7' );
define( 'SECURE_AUTH_KEY',  '9IHNhW:8;(Q~+%Elp5u4/h#AqsJ$P>}!NMLN&I-si%~kxJ1}w~!%@G_%9%0D=1~R' );
define( 'LOGGED_IN_KEY',    '8OzB1kRnPqFn~;[epUrm(.z5ntk-]O:j^{TadIIct9[b4.02=]wolA aa3GI/a 4' );
define( 'NONCE_KEY',        'ftA/a^Y|b2h)Ff#hqcO/%yW1&lQ;?F%t80yfhC!<g1.O>^L5icEiOH3AnNmCJAL?' );
define( 'AUTH_SALT',        'aKPjANL[u# 46~Y=>/8/3(-,+XF?woH}-lm[=zq9|?:S*CMNpO02z?r,Q7LCpwI}' );
define( 'SECURE_AUTH_SALT', 'pWFcw&r6yGtF6XZ1c1U6aOuXTUz3YAR-8ul}Zpj@NF~ZjanOu(T`|TuY)7EAGoSN' );
define( 'LOGGED_IN_SALT',   '>IGAhC0u~{[r<OVY,AraNa0J*z}P@ty`(TD:Qs|;Q&_0){A!W!4L!]3q!@Inv_Jz' );
define( 'NONCE_SALT',       'vD]XNer4}qKF#ve9RK4VbT#1?v9vP@!:1l@Ylu{buuA[e@XFs2rm%)<A&ijy%J,D' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_wordp';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
