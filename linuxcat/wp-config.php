<?php
/** 
 * Les configuracions bàsiques del WordPress.
 *
 * Aquest fitxer té les següents configuracions: configuració de MySQL, prefix de taules,
 * claus secretes, idioma del WordPress i ABSPATH. Trobaràs més informació 
 * al Còdex (en anglès): {@link http://codex.wordpress.org/Editing_wp-config.php Editant
 * el wp-config.php}. Les dades per a configurar MySQL les pots obtenir del
 * teu proveïdor d'hostatjament de web.
 *
 * Aquest fitxer és usat per l'script de creació de wp-config.php durant la
 * instal·lació. No cal que usis el web, pots simplement copiar aquest fitxer
 * sota el nom "wp-config.php" i omplir-lo amb els teus valors.
 *
 * @package WordPress
 */

// ** Configuració de MySQL - Pots obtenir aquestes informacions del teu proveïdor de web ** //
/** El nom de la base de dades per al WordPress */
define('DB_NAME', 'linuxcat');

/** El teu nom d'usuari a MySQL */
define('DB_USER', 'root');

/** La teva contrasenya a MySQL */
define('DB_PASSWORD', '');

/** Nom del host de MySQL */
define('DB_HOST', 'localhost');

/** Joc de caràcters usat en crear taules a la base de dades. */
define('DB_CHARSET', 'utf8');

/** Tipus d'ordenació en la base de dades. No ho canvïis si tens cap dubte. */
define('DB_COLLATE', '');

/**#@+
 * Claus úniques d'autentificació.
 *
 * Canvia-les per frases úniques diferents!
 * Les pots generar usant el {@link http://api.wordpress.org/secret-key/1.1/ servei de claus secretes de WordPress.org}
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'NU|SK/u#0bc|Fo|[S1d.NY@S4[ep>isy$R%S5W9E-|[1cPInMBJ5*TOfxt;p86E1');
define('SECURE_AUTH_KEY', 'd=UF!j)x%v r%O;.+v+ LcSH-sl=g}peHmTE,AJOqGLhX&EbEhlDoV!6_K)~G)7I');
define('LOGGED_IN_KEY', ':Mqy|+E-|y$u%$+PZDO<64Q:dJ.J)+ nhp|Tsq++hpKsS$6B/^* UhMs$b|=ac*P');
define('NONCE_KEY', 'D~SuGLa=&KLNk2M+-ptd80p0Q|y~~PQb9c~JWn>FS|fLm!6@rhU>=d Y9|>J1cV?');
define('AUTH_SALT',        'IyQZcF0W+m~8+t%pe&F-u#c}|vs?DJk#qp}+qgE|K&0K|DA[x@04kC~]Fo;U qHH');
define('SECURE_AUTH_SALT', ')#Cx<)l$+4lasY|<6-x.|0T4w|#{-)jC}1Ew_e}H!CXN3hIAad|[c3aT+_uR9)}M');
define('LOGGED_IN_SALT',   'Q@)MG.=-V>Cq7c7Eea+;:9AZaeekr>;7hM~p4&emwZ 76[kyE@p~00)}RkV3MTQb');
define('NONCE_SALT',       'aZ$5gA^eIF1P/d;s+Q>{Gp5,#iJ/54i3l+*k;kF&KF6ar)|szt w=Ad]ac:uYC4S');
/**#@-*/

/**
 * Prefix de taules per a la base de dades del WordPress.
 *
 * Pots tenir múltiples instal·lacions en una única base de dades usant prefixos
 * diferents. Només xifres, lletres i subratllats!
 */
$table_prefix  = 'wp_';


/**
 * Per a desenvolupadors: WordPress en mode depuració.
 *
 * Canvieu això si voleu que es mostren els avisos durant el desenvolupament.
 * És molt recomanable que les extensions i el desenvolupadors de temes facien servir WP_DEBUG
 * al seus entorns de desenvolupament.
 */
define('WP_DEBUG', false);

// Això és tot, prou d'editar - que bloguis de gust!

/** Ruta absoluta del directori del Wordpress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Assigna les variables del WordPress vars i fitxers inclosos. */
require_once(ABSPATH . 'wp-settings.php');

