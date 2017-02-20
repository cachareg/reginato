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
define('DB_NAME', 'wp_reginato');

/** MySQL database username */
define('DB_USER', 'silas');

/** MySQL database password */
define('DB_PASSWORD', 'senha23');

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
define('AUTH_KEY',         'W08nqGKP2c&vqX6u9p[e=hl{cf0w^*T.d&kUC9-#)^9].j<*A8 hfmf%({UHhvES');
define('SECURE_AUTH_KEY',  '9W/k~q:|q+,iB/OJ3c+Kt^bB|{)RynNQI}R`JO~A[q`gon*s-@^Qs;,~v)bfh)PI');
define('LOGGED_IN_KEY',    '?mpQ_;*J{32$f4F% <FCn@S=W.BcBdcRhkZ$09^5rlu6Vwu7PT72]{;y<+.njS9L');
define('NONCE_KEY',        'E<Cy_9~%~,i`z/HB 3*KT45L&r80C:4aOx=A/t9oL6rMeGetLAa9MgWl?ua[P~MX');
define('AUTH_SALT',        '} ac;wee/h*<$>m#0Iq*K-Lkv#sO48Sy;8pM.b9;@!LXtcx9`8>h]qb1M$ZM1z/V');
define('SECURE_AUTH_SALT', '8w)d[?+?kMAG$JwXZ VUl2yXi-,t}Z0*jqNJjOr{8#:B,{,?msRO-5@,-r$2gtO?');
define('LOGGED_IN_SALT',   'XsAbNY)c-+O^?WpP[|IPJ+4J%tf(:)9F(/.!qohG,JLlt |GK;g&DCQR`[:k;1{j');
define('NONCE_SALT',       '%H=lYy*CGxd|b%CY_b(ON*]!ma]s92x*n]`Y{l8:]R^dln+!?{`Csu|n>,KkXUn2');

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
