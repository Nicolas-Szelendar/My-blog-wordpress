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
define( 'DB_NAME', 'blog' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'J,tp(-UdkY1.n#%Yo!jjRio;0Y(2`x_)zd{^vmB{+s?u}qNJR1w]?{1<&(/M#1^P' );
define( 'SECURE_AUTH_KEY',  'hh*]=sV2fr1Tt,j~sdIvehr`rdC f8Bis;s7Fe*LGt.N00r> y@!m7vYYAmy}Z[1' );
define( 'LOGGED_IN_KEY',    'ujhpP6y94NizJifUo$B&wQW</#crLD<;d+y&kgx|mJE/#:api5/x@?0$Z01l)h0c' );
define( 'NONCE_KEY',        '8=/Ki9WC5%)$eC!sc2,PoO9*< ZNye=m#Rg5=dl%n |j_dnIKN)^wp@baI)__o:0' );
define( 'AUTH_SALT',        'fRi.T.$ziL;0jj0^T-7}$3UdpIO^G6D8bjmrE[.}Xwb+h,=1#)z,Eyie@&X,#|GC' );
define( 'SECURE_AUTH_SALT', 'V6#r7&?2hx!#p5q5B{brFSg:y0<Y5EY&>m<Y;..F3wkMYiTE$#zjfV/i)#q-egrr' );
define( 'LOGGED_IN_SALT',   'EB0#L4/@1L}zkw0[:$,A=6ln}b`$Bd|hsI)rev*t9;{_8gTr_0vklaz$!)REFcs/' );
define( 'NONCE_SALT',       'e!_r}a+d5mM+tR(^JLxf70GP:O74nIL)OgVKrhq!G+7dhh^gaFN=/UQ6YJF:<t=[' );
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
