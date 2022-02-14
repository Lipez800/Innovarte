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
define( 'DB_NAME', 'pinaculo' );

/** MySQL database username */
define( 'DB_USER', 'pinaculo' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pinaculo@01#02' );

/** MySQL hostname */
define( 'DB_HOST', 'pinaculo.mysql.dbaas.com.br' );

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
define( 'AUTH_KEY',         '1BmOS!uY_2}G@GfV)q2<i:5P?O1s8s7 ]<iPa:y^t7x_^F_WrI46D<iXhJmypcMc' );
define( 'SECURE_AUTH_KEY',  '@.ksS|J3$#S,%H0=]%GuUj%Z[aP6{y4#KY*;F4D$KzlOjr`;JT#EQ~$wiXp6S2v5' );
define( 'LOGGED_IN_KEY',    'oB)]zWAMUt3znmo[j1R:l##ZI?|I7j=&fPqzcNyIC.G8KQier<-=GNZV<kQ2vY=j' );
define( 'NONCE_KEY',        'wH/wLL=RtF%(K[ZBZhaD)^s{Vo3v:IhI+(N!mw}9z(*aklVgoE6;POQqRiv@]@S1' );
define( 'AUTH_SALT',        'mru7x|+pgYxGP_2c(^6LG:)N%qn8UVxT5Fm8%lnxu-a6%Fg~!~_p&o),+8l 5_)R' );
define( 'SECURE_AUTH_SALT', 'wOm:T2R~:c_DfVd[u-vdXo&=#Y:G?zW~1JQ~+UK0NwF/--?CMy+8SnNZ;U-t_%C(' );
define( 'LOGGED_IN_SALT',   '|&IAQ8%Nnkgm4h9r7#HsD&}h(q;fIR}yvuXR$p:fsaSI&kLYKg>%!*V934N?66rj' );
define( 'NONCE_SALT',       'X`Y3FnEaDdG&0?iLz@<mZu`;[^8~*A]w0VR$oxoz$9` QB1$H^#.&Tp7vEXYVbOl' );

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
