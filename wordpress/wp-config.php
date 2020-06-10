<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'videgrenier' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Z)`=[a(X4-h:}>T{6rCV*KCJE;)t/S[pLicunMzd0V@U+o$C)v67vGt&N1Tb(.Qh' );
define( 'SECURE_AUTH_KEY',  'C%Wt}zzDy}*&kE[35*okX6 c~v4+k,_/9UVd[8~3eoQ$f[X)_=W<&[; Bj?(=K#c' );
define( 'LOGGED_IN_KEY',    '_I=&s2=Xu|cuNmZc4^~BASn&#W@ZRNN^>_Pu%HlnU~,|,?L)HATfN9YT6N~1gHz;' );
define( 'NONCE_KEY',        'vXnkP/=5&L|;T;+JhJ!/:w23f2XW$C5B,;!sE37]}qB1bT<M[;,L02#)=i3RI_s5' );
define( 'AUTH_SALT',        'k~YE,s7(t~Dqd# %XMu<Y/p]8?%wUnW{UBvf;c=&SDy#?YsuWECW%.CMPM[OIl_y' );
define( 'SECURE_AUTH_SALT', '(Osxntm^[v1I3]M*X{<S$bS1b@OQtkUFQmSLS<M0n+]Ip8lD(>;0VZv^jPhZk8o2' );
define( 'LOGGED_IN_SALT',   'z+UH&~[*1kE?|Jf%,ume@/kS* GD?cqIn``(82W4Jeh9mV`C^`RT9aeu_oWS`~kO' );
define( 'NONCE_SALT',       'MVg-gNPrm^x5g}I*gvD-.W{:yBrUOY&=%!$X[r0abkD?26u^3l*H|:JIAZb#@?z]' );
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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
