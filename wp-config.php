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
define('DB_NAME', 'wordpress1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Sugar123#');

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
define('AUTH_KEY',         '9q%(KyWGQ2xn+6c/Q1@%A/]RJ3dG%si_d@]O8p8_:n}z_t<|LkplD+V]NBe{(05-');
define('SECURE_AUTH_KEY',  'o.3t%bszW2hEG|4l@_1(KJGtS~PuS33++!5.DLl*#;+SS5~y4NJD>L0o$EI,{iQ/');
define('LOGGED_IN_KEY',    '*#8>HkTH[!q6!JF`>~WF^;<5({H;:h&7>K;KIR[;{]{_RCx>/%2txW1~3n9/eo]=');
define('NONCE_KEY',        '8B;c)mh$MvmE&lD>gv.Quyxb*z6! eNaZ<DP;X0Ii|EwUsIncJ qz~MU:rnfs,/G');
define('AUTH_SALT',        'F >P0ffIXy033=zDWpxqa#?# 8VZILf@PRp+u,JR[!,jy4tSc:R/Bb$7f%}ZK0{>');
define('SECURE_AUTH_SALT', 's6( 8m4+E99StE*&U@zGyeMUIGtWyTL2W:IKQmiH!zs%wtWZoN[8;0dX;V0c4lM0');
define('LOGGED_IN_SALT',   'IJXw)/ |JjUX<(SSVMgcjNR-#X?_fZI/:H:/5p[seAk((z,7,Y~vrpA|l?Sy}% _');
define('NONCE_SALT',       '$W;L7%]R,+-g&geD(a+77kLjN{=w4TZ#bj;>ZgRO[n!3iF(scMC<x!Y]&?r;N /2');

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
