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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'k5<r)xPGiC-hd2}!#AIiB?XY+ P3S9I-Ql4m+6%IV&B<;!(PPi?I-dxv]Tla_6[Z' );
define( 'SECURE_AUTH_KEY',   '`h:1~C^:WW#;L7;FQ2&NsCK}_z1KDE6,@ko`#T6O}qLwF~BWS2=umd`X-/gH0F?z' );
define( 'LOGGED_IN_KEY',     '<sI,&Yep^b%_7Rw<X~];d-@SE}&^Fe<`eM%+mD=})MQY{e#E)7;1:#JFq(d]5bm}' );
define( 'NONCE_KEY',         '~l<:acX#XVC>UsSUAox1l^TQvJANVQL($Q<GI&6Q^F-{V5XR%sAkew#,y7TgOl3Y' );
define( 'AUTH_SALT',         '#+pei6g{hn^Z%J!&p,camw{}2iuTvGUY[+Im{pl@YA(3T?NP)D%?`$^O5:KUm#b}' );
define( 'SECURE_AUTH_SALT',  'I2Z0F1yXGkzE:zYojske(TN5n( L#F-z;yuu[LN3%f;cre!VdamX-}EcV[JdG<t5' );
define( 'LOGGED_IN_SALT',    '0;LFFlaD0`D<FImtJ&q+r,e:Toj~%4DllY_%.8WwT$]PT%:5fJ*QAyi~s mdaU*=' );
define( 'NONCE_SALT',        '-?I`hC+?<ycxCoimza%z.d1Pdsm=>`JOe{Q[zi45`;D+eAbnruD2?zhdCkL`qObE' );
define( 'WP_CACHE_KEY_SALT', 'pf*7{1@y2.&oI6z>sTiECm}L<!9uUXRo/|9xdu)f}$DV>xBX4( E_h]CrMg2R#*n' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
