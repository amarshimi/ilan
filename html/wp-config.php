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
define( 'DB_NAME', 'ilanblog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'ilan-mysql' );

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
define( 'AUTH_KEY',         'J;HS=!nZqKsl%8@jPJusZ /6+gHNTr3>r3T._C4xeqnt-^R5N4C(]?bT7b?34=]Z' );
define( 'SECURE_AUTH_KEY',  'it=0BH,pJjY9cH&*Z+g9(AB+9OTnU3ByX6)p7=ta]P~jiQia$b6pfjr1IN4&kCS1' );
define( 'LOGGED_IN_KEY',    'z?}[kT-<>6RO(wLX-ba6X|KPTbifc/?!i^InGktV3O#ul: |fUV:,}mo2x`cJP:]' );
define( 'NONCE_KEY',        '?&w6EAMXboJl6eaz9cWk e$nLXl+H+sok:`+OdK/0<S)FM.]5$}XniqKFR-bE{,%' );
define( 'AUTH_SALT',        'E/@wj0knak)R~A~>xx[X:qt:oUbVyih=Ij?8R+Px;,aNLc&27a%<(&ofW;o5e)Iw' );
define( 'SECURE_AUTH_SALT', 'cUNrYvi&W*Bl:WDR(nB%=w;f.yS6KPn]cnDe_Poblg]epbA^Wy,D}8OvW =k5(mc' );
define( 'LOGGED_IN_SALT',   '7lJgxfqDE4^-#__:I={k4c1gDy}lT;.2 FU7p_~Jtp2~y;E2*E!$j`ZRgk]qgSn#' );
define( 'NONCE_SALT',       'y!#9=)^`VB(bwGw].MxjY0|w5r#rgtn]nP-,t0^F?p!(^fSRO[ZQq6Wnq=N_58~8' );

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
