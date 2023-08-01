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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nsblog' );

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
define( 'AUTH_KEY',         'Zdu@{e#BW2XZG#4l{8SE%D;=(2~fQ1J<P4_r^Z]t0E<hke7C@Ho$@U3I|%sW|9;N' );
define( 'SECURE_AUTH_KEY',  'v@DX1Sm#cKHGw`Ka!ec6FyCIR$g*b0U9_*5.<1<S9%INgmO$nz+E2{.O~R(GLkE+' );
define( 'LOGGED_IN_KEY',    ';rR`H:6WMa<<u%ev0gF3P_F8RDH !zku#Di7CUU1oj&2}nK>@{Lh7m ~EkF$PE~z' );
define( 'NONCE_KEY',        ':mN13Q<T5_A ~qy/<JK=RVREJx[reX{u?T}Dc6P0_/</{s+D)jxP{AnH9C@Y%j9i' );
define( 'AUTH_SALT',        'I{@j|zs-?<JKpj*<D^Z9 h]}(?GEz8l*41}nW2L>CZejfKT;+sn/Dv7S7j1ERie*' );
define( 'SECURE_AUTH_SALT', 'JZy/v<4Sg8-=eswh0?yd19FgPLxlFb[&iD_D*cvv`h4$|!Cf8@[v_n/yaRSaHu&c' );
define( 'LOGGED_IN_SALT',   'c*BH+H`(`m:wp^zCj27Kia,g.LdF@}}[>D`fgYpWI$J4mtTLpX>?g!ZHWZYZK|tI' );
define( 'NONCE_SALT',       '6}zjpcgA)l_r_lxAl&3m$AUtYu~?BF3ddG7K^X=H#k1?y)]gwE}y%}{GmAU(<3k^' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
