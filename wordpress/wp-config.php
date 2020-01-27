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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'mQ&gY,5{<M(Z^m`_#-vox|1!)iZ8oP2i:/z<dzk=c!lO{`/+PY6d[012Gi{eJ.Yn' );
define( 'SECURE_AUTH_KEY',   '|]qCjPfIHri2RO0*:+/WRf}=[sidh)/Xtkc{ZNl:s8j|#Uw5Z[~)TFL8X:u)SoXa' );
define( 'LOGGED_IN_KEY',     'XT{!!g]YJ!<|`5=NuX):^PX&y.@3^R~qU=pEY}Dzwcq6{:!L>DF,ruAqiGX& xc:' );
define( 'NONCE_KEY',         'xMxL)5<lm^Nt[U =kZwQCe5)pq: |QnEBE]p?uaT8~rc7VQF1eE7Jh%P0Sf:MP<[' );
define( 'AUTH_SALT',         'X=Kj05lv~NK;G&:mon_0EcQ#)bsEcA}8!]`vmzBA [N.a5RKZXl3>KoovxC5.U*W' );
define( 'SECURE_AUTH_SALT',  '!Y%G#?e87LK9zrhUxl.?s3aI`KcHFEjgQ3@YFyMbvnjI/$3~$. <}Rn.701tuO5o' );
define( 'LOGGED_IN_SALT',    'hQy%*Vm7$DKUj#5~LZ)_-@Dm?u_2`|Guma?)7_XoxKi__BmDLIp!wO%dUCH;<cO!' );
define( 'NONCE_SALT',        'x1R-7V]iaRe%yy+}q3E/VaG<m5Zw(rS>feE7aT7B[b:+n:1g|>H,kP/P!dgQfdZ}' );
define( 'WP_CACHE_KEY_SALT', '<e&MXBE25HmrQ5CQ,BHw~B~xoT4,p{?E_c5B&kEzOBKA^K=fkhz5`wVVk?1<3mzE' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
