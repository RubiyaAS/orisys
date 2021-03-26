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
define( 'DB_NAME', 'studentmanagementsystem' );

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
define( 'AUTH_KEY',         '8y3YQQVr=[8O{l5@Hv9%DN7|4By.4d/nUWNyQRiiv]?}-rUeQl,2y[&nOqZ#<4f?' );
define( 'SECURE_AUTH_KEY',  '69B:J1?I:YLB7P?NUP tT(1(9~oY9fW/vP:|p)})_<5~~`ZhG^]FbD85ADjnOo )' );
define( 'LOGGED_IN_KEY',    'L<@<q71G-YOjzemAXH*a?,O7S<,~s/1G`Tw<e&g^X_j@BQkntc6v`/cJ(4sln^cM' );
define( 'NONCE_KEY',        '&U4]eJaq:nYH%.]RpMqNji)AAk>$iR/5*V4H@M@$R?yK:r$|Z4yp,n~1rv.g2)>I' );
define( 'AUTH_SALT',        '~ed;f4MQWVt*iIl;D*AjSmOz7OQt?Gtm+*aV5Lixa.2fZ?f-^[hA2zd0]EW^gw?m' );
define( 'SECURE_AUTH_SALT', 'cP%RNXvh>:l}dr2ba<e3{t,JDYC/A)~=IJ@wt[}1*r]gV5.No$w^shvYMkX5qP+e' );
define( 'LOGGED_IN_SALT',   'jYc*Hoo==6cj2b3Zc2H5y9vQ>ubeYphJyKnIy{dKrO{bfFr1qx}^xaDs(~@,6lLT' );
define( 'NONCE_SALT',       '!>A[c)xa!kWAUTc2J!(CO5yjD5IHRI,SD_%{SW9ia0h-h*}@8eW^0$~8!P/)q;*(' );

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
