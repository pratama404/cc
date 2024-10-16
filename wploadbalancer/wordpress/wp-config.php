<?php
// ** MySQL settings ** //
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'wordpress');
define('DB_HOST', 'mysql:3306'); // Nama layanan Docker untuk MySQL

// ** Authentication Unique Keys and Salts ** //
define('AUTH_KEY',         'LXu)(V q/DV]Gj,f!-/!TOr@C]yS*tLn5U4O>Ga>n%kA6 +[HJ,SJ~bInV-nn|yK');
define('SECURE_AUTH_KEY',  'LZmOTNh YF0kSq-TdWN}Su|kJ+QD`teWi6;?#!.Q^Q[n di|nr-8=mWTSyoOjSA6');
define('LOGGED_IN_KEY',    'Ji+ M@;F$_JFV7 MbCwB]W4V$d,}9uP|]mnCjTvYUmx,RUAZ8Xie2pfQ-ik_F@c0');
define('NONCE_KEY',        '7V|Z0#-zj0U.O#;}()mL1.tPsgcW^+`cMX^V/U<Hg5#Zj!V*@yv?NhYrG=[R(MUs');
define('AUTH_SALT',        'Wb5lW[Q6t8{O?#LJ7w24G&DA>Oz:|F6;eJIP$0*Rba+H+-cc8pvS}p5m0Y88$Lya');
define('SECURE_AUTH_SALT', '<V_OY{%J@>VQSxO+Lu2j]r]cnc-Fn0F(~kW[_lYmNUq#VA$,7Qcr-9eFdXmb| L*');
define('LOGGED_IN_SALT',   '<M{ #^eO8VbN_E@}eyL-4wwQ,%+2XEvX+<^X/ajU`%Ez.A6DPYjl?x+#36ndy3}5');
define('NONCE_SALT',       'XIwHH&Z-Pn-7,#/Hs}`rWp)y>gVzMM1b-eY?_iyz-Fd6e<q4#jNGtmcS!+b/@4|]');

// ** WordPress Database Table prefix ** //
$table_prefix = 'wp_';

// ** Debugging Mode ** //
define('WP_DEBUG', false);

// ** Absolute path to the WordPress directory ** //
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

// ** Sets up WordPress vars and included files ** //
require_once(ABSPATH . 'wp-settings.php');
