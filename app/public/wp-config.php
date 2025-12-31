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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '~yMUS*zQ_Xfb87ROb_I&1$.+7ALyY(QzjFK2-OLP{h+>LF$$1,Pbhvt3k3Fv0d#,' );
define( 'SECURE_AUTH_KEY',   '<%B$)}Qn0v*aT$;G}Pm>e~QIrSl+yY#ST+1ChhJGaRlUn^16:vN|h ?(jX1]zg}]' );
define( 'LOGGED_IN_KEY',     'DXl.Jx,TGU|)6E(W?>]:k&![iAJgmDLOuX&76gb3[c8~NEE~kd^Rsy<3Jg!Tn[^z' );
define( 'NONCE_KEY',         'oi6PR-C:VkR3|j,-4mYRDz&c;rAOuc3,buc;oK9YAs[4l/1>m+q=I4v/@,lDsBgX' );
define( 'AUTH_SALT',         'bKTC~7T1xNDZ?G:!/a3Jzq&nJn/5M8_3//F0IG1n-x{5/Hs /I|62A=n,|!}edXD' );
define( 'SECURE_AUTH_SALT',  '`@vA8amLD)5e_`z:d[Pf]:EEx<FVSPa:DFt2A{;VF&9{)Ri~.E<;P0:gysgaa9N1' );
define( 'LOGGED_IN_SALT',    'p>5Vjr M9UGBH_=J2V=CBh:,icm[Lyxsly4V!bK0c=2SHv-cC7z)?2 W.jBK+43G' );
define( 'NONCE_SALT',        'h- NuZ $oh56KHsPZlN{7zp`R7qsmE^5ND>GfU9z@G++<?@M HV.| c4u<`%Jgt=' );
define( 'WP_CACHE_KEY_SALT', '[9w$,ar59Te8[a8#qd:xwL }G~c%%1/(IDAw~{WY]itdh0#]H>t6!G]]i7A<]@ m' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
