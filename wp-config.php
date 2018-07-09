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
define('DB_NAME', 'gites_suc');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'qzne57tf');

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
define('AUTH_KEY',         'wmj_HD3YTKfM(j-(d~KUTPfU`aY<09/U(Z#.WIIox ;*`g5 -g@|+-$YYO/+nNp/');
define('SECURE_AUTH_KEY',  '3wOes_.}OF=L 1(/1tWN8;4>qC!oVXhFGP@v<R#C4?:b%OZ@k}>&3KE!Z_6!I.[T');
define('LOGGED_IN_KEY',    'XJi)V;y%`Dq<guX[F>= W5cy=mwB| TfF$zwYf~Me7O/dFnx[i(^>Cs8urAOU[CJ');
define('NONCE_KEY',        'tO3O{tet}i.^-B&D#D.*=jPBXKwb(-`kZ%UdE}s[ES3pGcLjH3Gu^fU mSolnx,x');
define('AUTH_SALT',        'D[^Qvy[Xl/Pbz%UCBSGl$.(LPG&ED$@ycouOTm0pUG(8P53Y8yziauBP$Gu;c5Sl');
define('SECURE_AUTH_SALT', '9vnMHabJL&|k0){nMB-|eVc39zc3Qh#U0l[sEp _3v8QIj&F00/P[10=FcnLtE|M');
define('LOGGED_IN_SALT',   ' ~AinCeeEIfJL{=*4@:d61Q3L:^cGYPLU$k+xe-M2oScnBT%q+UQ,%VY(U|PSAzv');
define('NONCE_SALT',       'i:fVZc8,mGWgcR5gQD0t&Z;J)+&:w^ndE_Lhi&61]=vpeFFy9ub35M1y@WF@rQ+O');
define('FS_METHOD',	   'direct');

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