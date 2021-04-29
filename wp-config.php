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
define( 'DB_NAME', 'wordpress7' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '#48g;ICKqKnE{n=.7;a^%3rLR].~u9pf1HfgeO@U T@#lpKh:p:*`PDm4{2e8-On' );
define( 'SECURE_AUTH_KEY',  '_S=ke,o2imlsIi^}A`YdUJgOf.~fb6(aBWzo%_K$k G3XzWCY5NwEr]$y&Ciovav' );
define( 'LOGGED_IN_KEY',    'xQ?kC~@7n{yPv[]cP~=go)YN,&4#ponU`aT;DE56AXb},fE& ?k##S0LAT^=dR@<' );
define( 'NONCE_KEY',        ']P&.-HtRedg:$ FEZ0RDL};aNSQ2rm7JdDWhyRQ5ps0$`[s|}k/3_fq:02^`?ZB ' );
define( 'AUTH_SALT',        'f#Xi+lW?*yIte,&4y -/?z}3PVRwm|z@YPuNsio}{GjS$Hwl4)}r]Ynvx;e/r@;x' );
define( 'SECURE_AUTH_SALT', 'SB6dg*;JnCx`shqn@7>if|NZ=JxKX*r%x_575SJ[%W;+SmAE-8L~BuKAdK tZ%%)' );
define( 'LOGGED_IN_SALT',   '-5I,l#lZL`; %xv1}%QW+nk!iD|d4xnh2Vw*`vj+D=gGuxWndrSfO/s_5CiqXCL,' );
define( 'NONCE_SALT',       'TCe~*6E-g}pLg4FLZ.kkc?V6):C==@ _XT`7/UD8Z#IzN&)ydF@e.{T#gxs!v_u6' );

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
