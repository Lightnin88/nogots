<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

//define('WP_ALLOW_REPAIR', true);

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'R&xnI3>IbtB+`is4G+sqQGMPN6;jXUJ8}ZvH+_Wm$yl!#F`4+RFd(=0G~0Jv_0#[' );
define( 'SECURE_AUTH_KEY',  'wfZVk&oBSggI6d$F?3>4;,pwqGpDR|%V($n:b}ZA)XNo9J2r;vCD-3>EJE<faG?U' );
define( 'LOGGED_IN_KEY',    'v_RCU_LwZI.X:ms:T9mH11Yr/ob,<q0v=S.+RE@?~ZEd|c~X~j/OF$:eHi]j?n%>' );
define( 'NONCE_KEY',        'uvbhpTyTm/y1fAOURvlSp^1<2xTzC*)t7/.{u]q-Xs8MA,^!Pa~^^`6qDBr16VnO' );
define( 'AUTH_SALT',        ',F6EN A*S~|^QgaYQzR!]GSgz}I2QX@^ VGmV.i}1TTnF pjG9p&8=JllS+~sl[~' );
define( 'SECURE_AUTH_SALT', '.Fx|Uc>qXD4?)LZr68RgpK&e=Ch}st1WL=38ig4Uy&<Q$ZWg<&t4|uqwJP?}@q f' );
define( 'LOGGED_IN_SALT',   'M!75=V{Va&*& *,YhvPyLa(D>cvFk_xcyV^[+zPHqK#[bCHDs=(dqKvI9U$UsnqT' );
define( 'NONCE_SALT',       'E2BI6v6e/;ute*l;V&u?[~X+ttJQ-dkX%+]z(>uyutHd3(ThJZMmw%VU1&kE[rD(' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
