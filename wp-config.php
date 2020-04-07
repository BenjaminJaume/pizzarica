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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pizzarica' );

/** MySQL database username */
define( 'DB_USER', 'ben' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '[,ljiQav.(;Elg0BBT25#Z+|FpvTl.;<o4opNQApdTNS0>~`P3<6 ^?03HjVs!JW' );
define( 'SECURE_AUTH_KEY',  'h.C`<,s{xxL)8ipHgw~WrE>yn&B%o@jRf|H_}(cVoVp]^S,kf;I.$&*|kF,Xi)7P' );
define( 'LOGGED_IN_KEY',    ';<AKDS RMc;~1!Xl}.GcY!OU7liTDXl YNPHAH=GPA;Abfw9f*5hhC=jj_!4_e7~' );
define( 'NONCE_KEY',        'T9dEC0jl%OhmA.e@)P{W>B<WN1,v3aT7SHgAoYu[3<0*@{4}V:nc6-;#84fbJYTD' );
define( 'AUTH_SALT',        'Tb^]J)s#W6H1M %|_a3$E%q667|[v;wZOix}R.MmRY&~H_Z[iAlt%*jK31s!u>^]' );
define( 'SECURE_AUTH_SALT', '4F.x7tjMV&;Wwn5zYy;M$|}B:!Pf*Jinz5_Y*N@P`S};KriG<B$IJ4DOq&:ZtPG$' );
define( 'LOGGED_IN_SALT',   'a*r  EpEz:*(unwb+4c)Z2~3mLoPx2m>ajOv;H|9D7L/.,2]4zlHia!ubv9)Kcjl' );
define( 'NONCE_SALT',       'DW7}uy;?Veq6hvyUB3#EG k|ZgZq5m}/xb 6!H&YM&ATbKJQXraK<Mf5LKM_|`PC' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
