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
define('DB_NAME', 'select_home');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'AM>$4X:CsuVkcl0Rq$}ib}uCVMg|w?KEXk/ih=3u2|h~Sb`_Lx>jeB>x>ud>lna=');
define('SECURE_AUTH_KEY',  '!nIGv-9LH<1$QLUD8@CO>3!VrX2S,JZ^gYM}<=V0%Qy:l@1n/8$KbjdO|mJuu`FO');
define('LOGGED_IN_KEY',    'oS(S.?3[c^_IFp_.9r>>^?Y[=p(srlyDbekr^W+*jJE[$r,ZYVt@1D;ZN+p(j Q<');
define('NONCE_KEY',        '*]wt>Ey`4?@l<bax0qZEZPBi1kzMIwjf{j-QYXQU$Q6#_g+TPYT{$88&CPd:~TCD');
define('AUTH_SALT',        '>F V%DO,LQNEW3%.6>?R;/j1RDpMY23w>x`P?UYFBdyccB3Jf[dT0=djx,_Q|(o#');
define('SECURE_AUTH_SALT', '_%]N< <yT,bQ9`4+{UJujJbK+-GH$>~6OVqU*8fU)c@$QWuYE;+uP1VU}UkrNf9}');
define('LOGGED_IN_SALT',   '_^jD: MdgrC`|=4>4DBf4/oXcm4 vBf@?2w/n`s|sqgc8FlHyL?QdX~RXk58-:kY');
define('NONCE_SALT',       'cQ0(J^gnU3J0OE/+]ZU)x_7 yhd<`+s{_odP$DMJ:$f`AJA0!kG wrxW;Dth5whI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
