<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'namelesslyricDB');

/** MySQL database username */
define('DB_USER', 'yzcdadysptciaw');

/** MySQL database password */
define('DB_PASSWORD', '90bk368Zo3UCNOT0G8HLN-LbU8');

/** MySQL hostname */
define('DB_HOST', 'ec2-54-247-79-142.eu-west-1.compute.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '2^3*$#Y$sV4l@fht#(:SW5FtCC>L`|z[rTF4|NQae#%0`G_ZWq8veZflY<c(|Hrs');
define('SECURE_AUTH_KEY',  'xS09)1]Z_y{YTU^:NtDJ*g,vL_j(|w7~4_ABZ7E3~Q9:%[|uC!J+r1ZPC$~Sg0.H');
define('LOGGED_IN_KEY',    '81H@?s6pXMwk=%qEeJ|s+o[kBP=m1Z@-hc(iJD-MI4G^0+C`%FA_yF?pYF|Ii}+n');
define('NONCE_KEY',        'OUvP.|x{+|z>50hQJ|#Xb2fN#hpeEsV#|/_ma0!V?f|4+0Z;4cA4azK-xL{/MIU(');
define('AUTH_SALT',        '$.,z;b6o*{-uH|oW#efq#QGnnjv%~(1l>NEizuC+lwkor!a~F-O7l2p|tcSXNxJm');
define('SECURE_AUTH_SALT', 'Ji%_Ow8n~~T-TnI<bl{oyB#_`;9fNA)Yh*0nw:0P %u^nZmmYZ-MK?t:gj|X-4qY');
define('LOGGED_IN_SALT',   '1: KXF`m-:}+7llS$i]@`5a1:{<$e%|+/-rX|m;9[|QKZymtMZnulOt27tU3ifGJ');
define('NONCE_SALT',       '4Xri#2T1*05&B4qpVkNX:FL+!T)f@F^.40/9xAZh3;{NhPAy:>Fu!09|4>I4fD<)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
