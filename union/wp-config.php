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
define('DB_NAME', 'cshians_db');

/** MySQL database username */
define('DB_USER', 'cshians');

/** MySQL database password */
define('DB_PASSWORD', '1043dcmslab!');

/** MySQL hostname */
define('DB_HOST', 'db2.webtizen.kr');

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
define('AUTH_KEY',         '<A,Sreqlb?vK+a%w!.0=cD_Wh7j,U1E[`4<Z.*M^MDtQD(|>.bz:0z{KEQ=emlNo');
define('SECURE_AUTH_KEY',  'i(F7GQW[wN<)/mJ]LX,Z2(ps!C8Y(_n{|Ym,(FcVI]Y|`fwvcV3oW:c!{9m2t3MI');
define('LOGGED_IN_KEY',    'kS?pHJJjhsB+jOf_`wb8pH2kt};O^=+VsQauKL5t ?b)g8Thj!nu],3+{JE9Mdnm');
define('NONCE_KEY',        '_rm>B`ze`{4%m!Bjb,JWXjh=e(7[w[(UF#;y2^MOKxWywu~<,z&]I!Oa2wUoIuLx');
define('AUTH_SALT',        'n6#3g;cGy(.3yKE$isJ&WGdhIFLN)VK6imTO,wQ|pJn)>~2IrX58No$mL;>}:Nvt');
define('SECURE_AUTH_SALT', 'l83ByD%u!k|@ONJp[HgD[EqQ*j^U} 0x&~ a%9&PPNeRe[YuPOe]0m#.z&<kr/@1');
define('LOGGED_IN_SALT',   '|bK|irk5hL3Q2|!f>R?ttDGp-Sa[uiaG5]e#8a<T*+;FiW/||Z`*.m2LYGQHp> C');
define('NONCE_SALT',       '@Vw4pQzsivf_&&~yW:0Hdp^oT|)#Rq-b|N<u;x~Mqv@i(_j<diH-8$^sjh-}sq0L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_union_';

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
