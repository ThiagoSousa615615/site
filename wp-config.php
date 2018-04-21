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
define('DB_USER', 'thiago');

/** MySQL database password */
define('DB_PASSWORD', 'teste');

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
define('AUTH_KEY',         '7HR&gb>bb=5(=|~+X*<qYRx@.aoh}W#G=Z;@X$?f.:saCO6-gLZQf`,^obi=O(g6');
define('SECURE_AUTH_KEY',  '~K+4wPko(loAE_mI7G$o^.gc(=qBga+#Ge:lrr.4Q~ %Jl)%pi#DOMV3`yA:i3op');
define('LOGGED_IN_KEY',    'UV=:yn~8PXr@(< ;n]e`u,,nKyr>PMu1GpB39:{e3sVYTx|!i(lceapY@@4%.PsH');
define('NONCE_KEY',        ':2t+/<C[~I|qg`Br_D;,oBLl^>xbjmCLA>UX-/y};j8s5=D5CU*8hp:yW<Awjba{');
define('AUTH_SALT',        ':XkgI/$WSlHBy9E1a4kD(F[hXNf}gUY~!SraV2[YtS3oVnxPJ|<Vb&PtxI[XwVKb');
define('SECURE_AUTH_SALT', 'ZACy/d1.%8%C2}#8e;hYv8wUi7u%Bo<j`(9C<?^P3d`[*`^X uL.| 6f+uR(.1R3');
define('LOGGED_IN_SALT',   '=6g3>8X.] OaB5<niP5`OUN/<( hqBQ3!UAP$IPAkd|Jl#/5Ip3ZfBF=vM4AIPfG');
define('NONCE_SALT',       'g?MrF|Nll**/~BAJX-h._NidGNBnfXp7Ie[I&R7.y!%a;X5I*0Pv}F02+t:yx)[x');

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
