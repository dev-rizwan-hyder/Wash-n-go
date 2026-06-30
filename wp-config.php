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

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'washgo' );

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
define( 'AUTH_KEY',         '1<sr#279]<qjNa^O,RZHB}Rz2rEpGgA?;?qp].L_AX@ve4c#KyI;6C+=<`{[s|kM' );
define( 'SECURE_AUTH_KEY',  '9%9Njaa$%Sz$Ck.)5;E(Pm%(&jFejy+`2y/,Zy]+G(3rUD< n=>T*o#>GkHrd3Iz' );
define( 'LOGGED_IN_KEY',    'sA rJgdT6:aGHw9^HXdnGCNY9QOB-[]o>pt s6@=3Wu.d3&wW.Twcn?+O&?w~ R@' );
define( 'NONCE_KEY',        's_fSB iVR-wgl^5tR0:$*SJTn0T-&Yex>IV_;W;Ew]A#zIys:-stt2( WHNh_Y$9' );
define( 'AUTH_SALT',        'b5XJvzObk5DVZe}{NGT;HHk7oeffMJPjDtq~b ,FFbmc:=Yq0Sca.Zs I`4kb4QW' );
define( 'SECURE_AUTH_SALT', '`U}QE4J)[.]~LGFtd59w*I-O!XA4nsK#J5Ogg>QA%^z|84<_@90`~Eu}Iz+L$I(J' );
define( 'LOGGED_IN_SALT',   'eDg!L+W,_Fb+e&]imd~nA] X:Z/>-L|VAZrY<,b3fYz!K1Uz/IOXlS^2<9<>$b ^' );
define( 'NONCE_SALT',       'rD%D+&<.MJAnT:~oJI4vU9}V@iXO52dceb^P Nnf,f}F2)E*VtEo<Q]gy[dNJggx' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
