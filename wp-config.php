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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'l]* >=(spDs:^RPr.$EK,88bj>nw}Gda[LXI}Tg,?PdA0Ha@++3z~.(cPRC`SHg$');
define('SECURE_AUTH_KEY',  'oLvndRo*q4lg7uLhENl==(F8ZE^,o]e0,(>G{~E)9jw{St^z1CZ%RR5rr)i.2,J|');
define('LOGGED_IN_KEY',    'bae#Fg[Bhk$(VkH~cFs8s7JB_)@5dm}`H5wT*Qqd-Pv7A~Xvn2punB}57O.CqR;R');
define('NONCE_KEY',        'Y21%,Dl:a>:K.m%o&S8:*,!q?&$9M8U|8|wH,y~Q?Xm([t0hZAE2fgP&j6Mdx}~U');
define('AUTH_SALT',        'Nk70B^%^-UN5 _&}!HImP)a@.cA(a6z,b{7R+A$ YA3;!SfnJXjsX|pa 8>{|u12');
define('SECURE_AUTH_SALT', '.7ob>f6vW^wDNlwO2tmLW)iu=M_3afDN,[6Z/RtQHr5V><=:tl5w]ptDHBD[>9a{');
define('LOGGED_IN_SALT',   'RHkAp0<5RmHEs_LN Bd!Knh3AQT%,t<|1cS:0S s#<OZ3dc xFw{h4T E8DnCaF<');
define('NONCE_SALT',       'wZ#1Uj&D.YWKrJ<nnB8kQUVHw>M52gIBMhaImvA5*XO_8JM-mE+4/&ejr|tG-/}e');

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
