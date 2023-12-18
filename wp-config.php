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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'colin_firth' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '#Qp k}c?YuL;tT8}y6.6Z  Cg+;n7nAB@de~QaFw#,:{jrTd|c40Mj0m:CRy2>83' );
define( 'SECURE_AUTH_KEY',  '51^1,7E^LnUQvfk;j5z&;Axi*Pl%P>#,A3Ah,X;O(1>Bu?#0=bQ2}U-#Ep.Z?Bg@' );
define( 'LOGGED_IN_KEY',    'D(:oO<pYb^0-g(~x3mv9e~P=pUttD$s$7y-}Ua47pbeN}p$~7Q%8%Z!PyZ]FeTmg' );
define( 'NONCE_KEY',        'fs2J=5s/Jt1lamZWi^lJ4#Uz1Zgt6$gTy:aUD+O&/j}x5 e)b<Y0kM@gN4Wg-KG7' );
define( 'AUTH_SALT',        '~92{CknW.EZ_VZK9!`dcbQx;gN8N2LJ@3B-9LvFS^JJ^[,]bO?X[!=h[[%kc|ai]' );
define( 'SECURE_AUTH_SALT', 'W92zS%_t5>ZpR)=rm$UBMs2Nkz{~7##,&vC|R9{ZC]0zHE^(5GF&2%GW#1Wt?hbt' );
define( 'LOGGED_IN_SALT',   'GpN]dYNJ?.GNVP|#.@QhoNRG9?1,~](Gtv7R~~fBevyX1yrGFh:w tNg+TSHEQ=&' );
define( 'NONCE_SALT',       'YXDdz2}gm;%ciFD>9WsmSRn9Y-.^:ZaL_TR:WoI)GT}304Of&Ympit_h1nOBHnpq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
