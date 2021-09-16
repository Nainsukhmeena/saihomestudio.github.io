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
define( 'DB_NAME', 'newpress' );

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
define( 'AUTH_KEY',         '!6SF1u1lso[DDa98 f|2ut. ]mdNHV}F`.O2~-O^&.tFfv+}|%218`P}I4Fn|sg%' );
define( 'SECURE_AUTH_KEY',  'l3zp(LfKqQF2b2$j8t>-9wQv@]3e>*:Tqk!EWh.#ODfqJ$92_Mo*DBHxV<=D|2SB' );
define( 'LOGGED_IN_KEY',    '12C8X>=_oQROY9;8}.KaEzX45@lfWatz)uuGc9K>O1_T(MBZYz|aY(D9p`eCST=*' );
define( 'NONCE_KEY',        '*4+QX$i!Uv,qUeqAuDY|S/wKe~QFm2*>eC<*(NR_E8=D7Q5!VBq7K6$%y)j/_,nZ' );
define( 'AUTH_SALT',        'R*|UZ$%K-&tB/W{oN~3Q--.5kPwzaVX6OG+QpjYI5NX1)&eYmw1Vy8_U/KjgC`S+' );
define( 'SECURE_AUTH_SALT', 'CEc%gM-+A*@f-qar<P49W-G&Pg([MGIKoKvqu8Cb_72|s`&& 08WKpC{t>fU!}5t' );
define( 'LOGGED_IN_SALT',   'w--2QS!Epga~@Bs*-jVI3qok+I]+xz_:{Y_/NL.uy8R1lv DW A2{v%NG7B0p08r' );
define( 'NONCE_SALT',       'o`XlTDZI<_~5!s`}!3ajmKwX|z&{s`.nvIY|WUn.hK/lPTe-j)B[r%G)?01{.mR!' );

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
