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
define('DB_NAME', 'desafioabril');

/** MySQL database username */
define('DB_USER', 'EdsonFragnan');

/** MySQL database password */
define('DB_PASSWORD', '89381584');

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
define('AUTH_KEY',         '-Jp~]]g0l]HiM96Xgkn3U>-1iI4I*YQ7^.TnZ.@t1cD){uH~9[N/3*O[@?**OVD;');
define('SECURE_AUTH_KEY',  'J0(brH*d!=<DF- $uizNOMQ7KF E LcAU<tvto@A-ee.a{+E*bo%I&U&#ve+rob)');
define('LOGGED_IN_KEY',    '-8+&fbL!D^-3at?qgUaK1=EEPa(8&7s/@W&wJ d;)tr n]1,?j7$QpknV6i^dQ9s');
define('NONCE_KEY',        '~l8m^U85u&ckqh) WIprh+(@+$(@i{%_=Al50=4{>5Pze#rHX0YJ3sf3-WP_lzaV');
define('AUTH_SALT',        '/1uY>hsAH0z!y(.Mi.&:wwhiW;hCR>B9Og- T0A,6(qLhd#COZUi{a{nE;bi:.}k');
define('SECURE_AUTH_SALT', 'r4zaGG}y)[>P98+|~Tcs1ZcL*H&8>?a:_:!Pu66P>mQFL^>Tj?^|Q&aE;/*0FE{Z');
define('LOGGED_IN_SALT',   'p.0kkfU90{c@FZXob*q4+;5frW-Hts/dC,~;!2&#oJ=z]nB8z.Um906b&(FH*EpI');
define('NONCE_SALT',       'Q9i~5Ob(wBu98yN)0bF6@b+5`/N@nbEZ<JNr` YdcefSu&Ji.Uo`TPGbO,yB&?^P');

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
