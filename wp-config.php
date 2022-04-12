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
define( 'DB_NAME', 'shikardos_db' );

/** Database username */
define( 'DB_USER', 'adm' );

/** Database password */
define( 'DB_PASSWORD', 'fV3J1ad4W@-[kuko' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         '5j*{FUY4w.+ :K&e^p{^*o8o.%;b#vE+t}QJRre[4_ubU7ia18Ch+G9@Z/A1[o*V' );
define( 'SECURE_AUTH_KEY',  '|XA]Z8|2A)B]TAA*B]WS4s+bwacLt;iiw!TCBC1{-5mip)@{*Q}ioTMR4?tI;GVU' );
define( 'LOGGED_IN_KEY',    'w#nQm5U-4Jq07[.5oQe;d!%BbV[~aT<1j1GEr9TyT^6t!Ix~A4vp`L{+TXp [T77' );
define( 'NONCE_KEY',        'r=g5A{2O^s]Gh{hNx<[4y>.IkijW?6?n#e$zVYF) ^nk~?5l]UD$:XWRU[*`l40I' );
define( 'AUTH_SALT',        '`DLJ<RG3bQOEn% ]p!.~Iz=G}}X%?OZlXC&2W;+6%d0034O!Z(FH5dj}dV+1jf@W' );
define( 'SECURE_AUTH_SALT', '.0wSd?Aa+qtA~kB8WbS,N|&gwI)ENxHI9HHpxV5ISr)-(8`uY$^(0@4A-ZI&|%qK' );
define( 'LOGGED_IN_SALT',   '=X^!KS 7mQH h@~/9sY_#4TFI%N^@&x|}$R2ZHqB-vaMhqbU8lTv^)79KS?2twjh' );
define( 'NONCE_SALT',       'mQ?cTE9B[9`ARU^i%B<fF)jh7Dr40{/&2rp:kQtO+kq(-MPUy&2jNPY7hBT6vS*Q' );

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
