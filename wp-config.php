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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_blog_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@O2)W+oC=0o!%qPBW4$_;QIIc:UlwuaNhP:38solWD 8RIy_RB/4@a!n(o3+<XIc' );
define( 'SECURE_AUTH_KEY',  ';O|`*[ZtzlBEL9>Mg>TcT!XNn2yO.eAC<-e&?}Hc;MH})e*aNaUqR){.GyV46W%H' );
define( 'LOGGED_IN_KEY',    'x-{$R`Wwgs7Ec-J29?2,,)?tZE/NAG8&8<U_3cpK7}&_^})A8mIoVoda2lV{#)A)' );
define( 'NONCE_KEY',        'XWZPZe>l LJWY)!uA- #?i4{z,C};Pvu-`G5bvYTI%o11Wih0=!]Ea$[_BGXufb]' );
define( 'AUTH_SALT',        '[HrmgiM/0{jp-=A+JgY!_PIvW*^L&Rn`;<^-0spTn.1Kh11ouO$ *U[pPV2k]wbB' );
define( 'SECURE_AUTH_SALT', '7c$r-U9v%($<(w]P4X;T;&d^8sRALzEZh:Y-/h4lsIS!XCdU</=xm#66+ z2,b,K' );
define( 'LOGGED_IN_SALT',   'z!Pc^y5H!!Io8o9EpIYjG|+&9fG7wzg$0p,dx[;<CGp5<mrttnqb>T>Qz&H9.sal' );
define( 'NONCE_SALT',       '!*;[A}^Fj@%a@h.G28__!]>Ue9NiP*tyian3m8)/^%(*;}0%jF*8?L=]HG+7 RQ,' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
