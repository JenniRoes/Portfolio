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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'Hp3yX]vY|waJ9x>0YX;*i(,oT&E7~,WgV6uKg]#=yePN_<OCwWy<+Ger748va;4Z' );
define( 'SECURE_AUTH_KEY',  'rZEy4_=spTx=62cb2VlKzx^ G[K&Noz!|:>!*`&mv@>}$e$W{Hb$qBQA-]p#EDJ5' );
define( 'LOGGED_IN_KEY',    '@Op!6E.hnb} &?VQ0iks&j0-qd_zuAWaVwwN9-ua+N(.eT#:_0fp/C0F^R`FIs]*' );
define( 'NONCE_KEY',        'DP373b$HIQ/]#Z*WZRC+V]Bi,9j 8b@X|4}p=Cy4+xy/zoi*K~@Gz)>C!n=;Bq{u' );
define( 'AUTH_SALT',        'kX~ <[mJr&=;n*4CiGxtdXU?gii>Bn8:rGz8EREd/oq?0b<SR=.QZ@S>W6w7oV*+' );
define( 'SECURE_AUTH_SALT', '/hsXSzg=LeeyZ-T#XZYH%Ag75H,UA^-[_*/u&_V0):@5$>7r?mHHf;Bm8vw]8=Q ' );
define( 'LOGGED_IN_SALT',   'R[RCGErA{90DVH |?6]V&juJT<QdO]DB8a!ql[$gl[HY1g4IpMC0Y:b`!yu+9BiJ' );
define( 'NONCE_SALT',       '4Q<MFq&G !GM5*L+nXkJK^tW:18B|Dc{HU;nGEbii,70 yHe+?n?BR.a^z|J8= /' );

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
