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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u123962300_CzXoL' );

/** Database username */
define( 'DB_USER', 'u123962300_8NtUk' );

/** Database password */
define( 'DB_PASSWORD', 'JMRsTO9fk3' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '$y;`Q@XH-mg^i)s#A+DSCPT_bXtPQP:yl(K>0=ZBGk^q l7lyc. 3bwog,8a$Dqc' );
define( 'SECURE_AUTH_KEY',   'uxfI[:|3] 7%=dx2PexYC=[|-fV6mH#ZI]8ax$F:Ot{oj8pIhXFt>vO$GT7VgM3{' );
define( 'LOGGED_IN_KEY',     'g(va`8$)+:Wh8w+|eOoJnx:!2 1]kh7HnYF^id$vnO@H|bzlhpsT&:>C[u{DCqaI' );
define( 'NONCE_KEY',         '*L%{% _xOhabR9uY`Y%6:f?+.aG0Z2L;_Y!( zJe2-D|Ihu26 b/vm.L.yOk!{i`' );
define( 'AUTH_SALT',         '|2,9S=p2sUD]Q]6_xTD=M  2qGkQ;( HaR(p.b=z@}5zU)KeQ`XPJZyj5Eq@EOQB' );
define( 'SECURE_AUTH_SALT',  '&XBwLBffWv`q,#om/kvP6l:~_e w}j_jOb>5`f3Pm@q7*<b0.5^Go;g)0vm6P25e' );
define( 'LOGGED_IN_SALT',    ':{>fd]:Yb+U?O*K:-}v`8:E;5?P[_-Ua38Yua;I*&S.dnv7p?}aB7_{(d[H|JXZi' );
define( 'NONCE_SALT',        'ANAH)6GB:6T.ERZ`9@nB[;#YddWZc|tV*DAHIz!WR+&%p`&-uqWG@o0Ql-6t-Tg1' );
define( 'WP_CACHE_KEY_SALT', '^nNH<iK<1k9@oJq q2w51S7>82|QMl:mdg22~h,xRi/*YnO:;jqA#vM{~+ehDOE!' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
