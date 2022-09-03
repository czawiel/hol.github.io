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
define( 'DB_NAME', '2' );

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
define( 'AUTH_KEY',         'B6PI%NFAku@,iHp5OsTc(&mjT1J2f!e9%<#Mm.8&EL}YA=3~[bMl7tiJ/@/~b&[N' );
define( 'SECURE_AUTH_KEY',  'MY.XZ*_E5Ne9j`~+w`c%h@|+?(!WoD)4N<`2z@ {*6r|xHClm6E?.8N7@~]A=@~1' );
define( 'LOGGED_IN_KEY',    '=q_<Ad 1EoK8L,LF4[jv i4kZ5~ysWB+?21O^[hEA~}%!?Db|NS| E^,<:KYKAoD' );
define( 'NONCE_KEY',        'ksf][?W+v*v~Y|1)<_M+AL_(j^DTEz[SO9#ASlG^!HgDw0#cD@>BAN(uCsPpeFN%' );
define( 'AUTH_SALT',        'h}C|}&&Drf&k7ESXy8{yH|XB B8EjDLM[3;;pGUN0b6-&^g^Ur]^V{N]IB;TSa33' );
define( 'SECURE_AUTH_SALT', '*tOpQH$?Cu_x@ujrh^pM:?4,Y-*LibBJ67~/G(/#3L)wBa =ptocNrO$2iVh-n8N' );
define( 'LOGGED_IN_SALT',   '^b.j2Nno-svx<bCyZ(q)YmTjl6$S!9MeMvq>D?8XyJYQ lR#K_^gsI?YlRh!Ep],' );
define( 'NONCE_SALT',       '|>fY-G#)/xqQYV?yR6=9Sw^S?GcC_-[^4yv[836K`Ru]ckA*{XfwopO^L%m6}vbX' );

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
