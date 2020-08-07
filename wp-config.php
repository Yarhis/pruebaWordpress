<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pruebawp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_{jMm,mOBq}6^eUM_79gipW$ G9} 2.B3~U{=K~4y83e,-$r./cxKXKw@@4R_Mqs' );
define( 'SECURE_AUTH_KEY',  'ljX%C+vD^jny&Pw#gLKfF()v%UNEv9]f;&*84j1/[^@9T`LwAya!S+ii4glK}Rc~' );
define( 'LOGGED_IN_KEY',    'H(J3a&D~={FZT~!{hR:Rt]9<#$~Rz 8(z,KBgT0jOpmE)x .1]k7@yD?qDt<)<,a' );
define( 'NONCE_KEY',        ')rS}9Zo$|568<yVBe:PZUuA_9-&_`-]jaiG@a2&3SZvW7Xi:BUC!tbr?XY26K (o' );
define( 'AUTH_SALT',        'tkctqh?<-v;#PY<F8M0CHYmtaw#_G({$nxv-nW!l|HZ1UZ=s|xsAyeV;/NVQ;coa' );
define( 'SECURE_AUTH_SALT', 'AK3MNAE/fpDc9B{X^8ONw&zlBAzh|]6^3J<tndVT.=NXAlG`pg<NTFR!sQ_MHxh@' );
define( 'LOGGED_IN_SALT',   'U5<v]M&%aa)y< <{(2G<@TI4AaVFrhgy?|Klm5?neqP_J%#!3,y7KpV.Gr$udK?P' );
define( 'NONCE_SALT',       'A9]Qz/D@%U7h9:7^M[oP8a^uu1$j$t ECH!f_)j+gZ{<v DW(mA4hv*)8KJ4Pyga' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
