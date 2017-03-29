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
define('DB_NAME', 'hoc-lt');

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
define('AUTH_KEY',         'Ix^L#oNuvGnLs&z>k;McoO$g~yv|&@cD2*~7kgO9`=PE-.(>AKkxZ*I^xD&u:PwZ');
define('SECURE_AUTH_KEY',  '+[sz=`dAqEIFLYNn[0u<TXmm;tpB/cQz{`<Eo>2@hR3=Uz$IfH>~|f+uj!F,ZHd^');
define('LOGGED_IN_KEY',    '<k[f$$f$2bZ3qA2rfQ5i-o2#[pwEx}|aw^Aj71`ixxYdSv/0}edA1X1-i+Sm0Vl}');
define('NONCE_KEY',        '[Z8ACFOGHyo`6/*~MKvW4_Rj3p}c)dUj;B}321-GNu*SeEW-}&3&,Zg{~Dr x{,A');
define('AUTH_SALT',        '>b=0?x8c0`lVV}6a8{|Xm9B`UkQ[kn0p@H{eouV~el;jpdJB6n{@oE5cWAv8}JYG');
define('SECURE_AUTH_SALT', '$X3y1;BRF|l.Z V6O=IU<N{^P1%_Ze:1P+t~U_Kit2|V1rQ~nJ9SH>R`]l;&iQr!');
define('LOGGED_IN_SALT',   'P@kW/CcN4P#G3.,`!RIrFqE<ew#/3@^`v0TkjQ#Vqn}b5qzq09JEMdM6k$FL;WkV');
define('NONCE_SALT',       '!PKe+Uvms[>0N*HFrA[RKY]T~.4jl n7dHmvyfV&@Jd&S[1}F;Rf=W%8>km x?R>');

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
