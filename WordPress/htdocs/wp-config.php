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
define('AUTH_KEY',         '{Cq!yq^d[gUE cp,9tecUo7SUK[>;:HXE2Pl(N8gHd],JD@OAs`WgHFOa5/6`W9w');
define('SECURE_AUTH_KEY',  '_?$^QoQ%Ag}F$g,)49pZ3_ZbpAy%ks8w39NeNZ!z4y/%m[h_$+CKzu }+9&7hz|A');
define('LOGGED_IN_KEY',    '4r%iv*mx;hzqy+z:^wVl/ulh&ms7{JYK*,l%:Ys8+,{k>NVszsS&y .D==X?9g[x');
define('NONCE_KEY',        '_UfaZ_D)Ch<FcY[GlF2M9]ju4$&L?1Te[_b=hNJY@PM]#<|i-zac,4VylFH33Hxi');
define('AUTH_SALT',        'eE`M)*F! `VK[k=}Me]{H1tNRl4LWCvp;bI+5jagW4!J_;fq|[;r#L>~./s% wio');
define('SECURE_AUTH_SALT', '!4Z4`nD$Y{o<$a`1OD{^/%f8=nM+@L8?H,HwW(BCcf[u&_y~x6n/;Xla%h$ke_I?');
define('LOGGED_IN_SALT',   '!>7[U&+;7$*unqP`*o!v@3/J&9 .Wrt0 rXC{p2eUn<9%Y34(WWK2v?56tXOKJF?');
define('NONCE_SALT',       '&!#BrJL-*%zZzWrQ;J#wJm#X3 oKygKaqm[_i2v8LP*{|smh:h:*2Ln2*]r[PhCO');

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
