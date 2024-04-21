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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'srbhe09c+W^HD=WZ8L!!51* )Z*vwrYdJ`JnqTx6vnf4F@JFu$E.]4u[Mj=.!d86' );
define( 'SECURE_AUTH_KEY',  '$.G6|d4Htt~DQJ*qexlw+v_;:=-W48f$|#z(9w5@5-!1m65d~=7i-A< W?+W2`~k' );
define( 'LOGGED_IN_KEY',    '}7i3,!a+7- B>r0N!3o@}E0&DK]N^4EGl!tD{/X-spdK33sc:5$U%0KQx@M#0cT2' );
define( 'NONCE_KEY',        'f8z(q? .V%3MS1#f-yplc*8.ctSm0AggB~RWJ^:TuAEu+j= <Gs=]bES9mm:|-pN' );
define( 'AUTH_SALT',        '{UHp pAz!v{SJRnPM57G;};iKkVM@]d{<kAc#}.70E%Kj4nTsz:o~?0T|Uc#vz@C' );
define( 'SECURE_AUTH_SALT', '5M{m4^}~7K_B(@,-N/89YgSUv()wbd(/YFr.s%#swf?{sa.kk3*6XeXoj[{*uZBF' );
define( 'LOGGED_IN_SALT',   'g@RWz{>$6YU$>9IedIi_Xy0[dU;C=Ol-s0tQ~C3Glh/8rD~QDob!]2.8ifQ6]@DZ' );
define( 'NONCE_SALT',       'nU}[D{KU5e}CbW7vRN6u86bJ.HT%[A8OKvO<hp5?8z$GwP>i2Vdn6d?Ao;r,Zn?|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'eco_';

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
