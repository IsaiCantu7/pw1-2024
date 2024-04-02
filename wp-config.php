<?php
# BEGIN WP Cache by 10Web
define( 'WP_CACHE', true );
define( 'TWO_PLUGIN_DIR_CACHE', 'C:\XAMMP\htdocs\wordpress\wp-content\plugins\tenweb-speed-optimizer/' );
# END WP Cache by 10Web
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
define( 'DB_NAME', 'programacion' );

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
define( 'AUTH_KEY',         'Wfc97yW?R{+*9Jvi&P+/1Ck!pZ/AHd{$rw+EqO*[M_{Spn*>W8xsih|BJ+-~7PUg' );
define( 'SECURE_AUTH_KEY',  'W~FRX^qd;4)Nr}6=hSs9R!Wy6Ba08!+0y]x_^C%WUk5DpUaWn^1^tP@Y>hoQ>Pt;' );
define( 'LOGGED_IN_KEY',    '&9z(Dd-Nu;LkKP2OpoNdbDi4p$TA3YorBzPZ]S~d3;lavw#?EvQ?f:00~F}TmOh^' );
define( 'NONCE_KEY',        ']nr@Sy:N$[%L+^J)+,fS2`bmUtC?;4hA#VI5<|+{R?kxVt0hG2F^NUw{2]&8;7@k' );
define( 'AUTH_SALT',        'YDJgI-vWxF4z4g)M_HY@J{?yeXn6lk>}P!h.=&CsLIdBPEK|7fALCjtGc!@Q)41$' );
define( 'SECURE_AUTH_SALT', 'l/;5gyB28_)g-)}22vU9u]~N!-vs>]2!pWfaSkpsYSg.>HsN^VE<-dMe3pu~ %lF' );
define( 'LOGGED_IN_SALT',   'EX{CnaDWfnU5Y[sM)[!jM>){*/)=X-s.tG9v$(@@ygmp3MJnXr|1C2Ra(SGFbhjy' );
define( 'NONCE_SALT',       '21HM+qiBr|eDxA8,BAO7^TMQ5rdx|xmx]$auZqz`!SET3fOhwZAk3R7s{4hc}I?{' );

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
