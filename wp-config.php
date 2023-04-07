<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress11' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '|,&&z+EH3Eg4C8:a@l=*GXP%Y#lb4W:?+GGgY[@^u,Ha(:jjVgQn~rV2Sw*^M1@(' );
define( 'SECURE_AUTH_KEY',  '^K|EP8A=@F`EMGi%HVU=WITw+Z6XyD!qR*7U/T]O>S6^q}kWW]^>uo [(I,Rowz6' );
define( 'LOGGED_IN_KEY',    '73#9=&6.u>KGEIczh,*wcjcYu_R*j#CB%fBaEDJWbHWt#Xh][}T@:-MniLt2wg4R' );
define( 'NONCE_KEY',        'qAu6rn |.:/.iV4*1O^LA)TwnmKe90RhOIu#qm>(^.BAQzz7v<(wLN;ucFYB3f|R' );
define( 'AUTH_SALT',        '!)<.9L<bH:AET+0).?EmMiE5YC:>jpk^RIT~5^QDcG!n/bPma}An4R%T;VcGaPc{' );
define( 'SECURE_AUTH_SALT', 'Di9G$:d7xJt=UF.`|.RZ{&+aX^QR)~Inj)+x VzFlz&1G1LWO/O|yMEy8_:@]I*C' );
define( 'LOGGED_IN_SALT',   '!e#vwvIaXwG.&_7VQMAO7YX8nLX7D#*4TV/RvR6?pTs0#*!]Zd u|(APdhbpPx/K' );
define( 'NONCE_SALT',       ')d`@yjm1O,qtGFw!`!ux>e1?@mnuzl<0D)Z%*>XGvb;:UbG)PI{}]+c(-o&~T;$5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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



