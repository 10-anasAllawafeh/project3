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
define( 'DB_NAME', 'sail' );

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
define( 'AUTH_KEY',         'I=:(mPeD3WdtqVk,}-<D/35q2*y|x<8qlQb<I^G>U]ZDDNwV(R!,`Sja~8_WkbWZ' );
define( 'SECURE_AUTH_KEY',  '7ZsLPA[0-8QvaXwXW1#JQR&vkZ@KZa(I?;Vn9qv11}D9Z@$@+!N5{?6BenGiOU?x' );
define( 'LOGGED_IN_KEY',    ':[yPQj:_FL3P.9Mu3]UOyUSKzTB1akx@lqj=bkW/8vnTnGR8E?}B>Yj6 $N-|$@ ' );
define( 'NONCE_KEY',        'T(Ng$N[3<6(9 }zTMkKC8JZD@,UCB7UEWzy{GxML()~Lcgs9+_R>#JYS4AEHZMvT' );
define( 'AUTH_SALT',        '0qC&`70+~4!mV<OEpna$@v<:fhW8pb M]bS9dSj@Ofw71]dqM1 %%?FE@j[.`(Ey' );
define( 'SECURE_AUTH_SALT', '>}&QF6z>9<LyA8fEo::>Mb;E[r`]):poS_]<H}|Ko*9[}P5v_6tZtMaU*r5oa]MK' );
define( 'LOGGED_IN_SALT',   '(1ih%*]uM8[l*R~E%N<{a5v7f>aG]<Vvt.cIxDoMhC,O}V,cWw[v-bsMspl|%}#o' );
define( 'NONCE_SALT',       'xQu&R@a.UV*?$Z95eHN?=_b/=]M-vgUgG,Y8J?/EN~ih+[sPx~`0@SHzPrB#=#7B' );

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
