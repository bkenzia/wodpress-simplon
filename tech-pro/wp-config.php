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
define( 'DB_NAME', 'tech-pro' );

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
define( 'AUTH_KEY',         '}B`~xDN v?P~)WY?#$bO[`F=yBa|e*XJtw3eo9wC@)y&{R7~E2t1SsVJ_u]D*%:7' );
define( 'SECURE_AUTH_KEY',  '(D9+p./yU/)D.H2>U0B4OpoV-kr&AN36Utqs-8%@eO#?P=$>f^nv6,YcAjwiPwK>' );
define( 'LOGGED_IN_KEY',    'l:EsZP.91H~B O>yY]{Q=blRXI-)B1`abaP{xXd9+l4#zixu_N/tz-x `|r==-<_' );
define( 'NONCE_KEY',        ';~eD+pq?eKA&2n?pJ`MxjNy` ;=>07+5Cgt~eM ;q%=Tn*EoF/b4m2G(k[tHcB+v' );
define( 'AUTH_SALT',        '[i:.BC<lre88+T*?y]{ohKwo]@X&$Ok(7L#6`}=SOQ:d2|ErT=wZH;J&~A7@CJ:K' );
define( 'SECURE_AUTH_SALT', '_qxF6/Y>fCY5gNrUv]B9 tcazv 4N J~-I|1RX,%`Mwtf80hix+#L#s|&CWl=7Er' );
define( 'LOGGED_IN_SALT',   '~i+[cg_dCO-nC]!v7r,kiQ0N2i=^qYStV!?ZksHePSW9E@y5aa+KMD(Z:w`-L`}?' );
define( 'NONCE_SALT',       'gUg9~H:J()B6lCuT$4^[v8xzOrr@g1d2DRkXVt8Zh|DEa93M;}|F+y)]I^5W9b*D' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'simplon_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
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
