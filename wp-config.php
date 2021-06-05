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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '~[pD@Gt>n<:@F5R?5U=EGvJ8+s_(NX*11xX?.6nY>)ti?~W%v*]Hg A@Fl~{qagz' );
define( 'SECURE_AUTH_KEY',  '6]sPCyX1~rU=^x0q_E;7l%o(,IwR$}=4m1fqG&bM93/fF= <&~%y;|caPQ781Ub(' );
define( 'LOGGED_IN_KEY',    '&-PC-$#}388WIz,pf{99K<ecfc<6-G3>-dQVQ=8qLtc}H+2UjHV?ZL1.I-Ag1A_2' );
define( 'NONCE_KEY',        'zCtsJ,Y<M54IhgQ-=zb@n4H.C}~ti6qTF*R:8.j8VUByhPTz<V@={d,lz3A-[crv' );
define( 'AUTH_SALT',        'od[++SH7>~:L[9L6![(4{ZQ~~EsYx3|Xf<JpJ}4u^=oQS.?+(mzVTeoYTE1wXqm!' );
define( 'SECURE_AUTH_SALT', 'dV]_Nf*Ri~W(.%eWgi)Z2d2;gXUl5|M;OO%BQ3Y51g+4=00R!e.T=uTzk<Z|~aoV' );
define( 'LOGGED_IN_SALT',   '^!.De[Q4YHNL9cE[{o}[}eka+Y`9R04ySR@iAO*YE8/^/bsr.lHr7e8q4BY$1i}I' );
define( 'NONCE_SALT',       'APf+&_jp.q`M(l/U{c/Bn+(X-8jVnHAmM[$XDo[{C)r@s1/79D%b:wy]r;Eb{dGO' );

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
