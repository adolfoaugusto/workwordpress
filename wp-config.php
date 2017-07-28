<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'news_aerolandia');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '1234');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6eTiU{QqGDBYv[ ?7?dec .Un>,&M|J`iL={NWi|_lv.R|10,K+iy%x&z]dcGSmW');
define('SECURE_AUTH_KEY',  'Q=p@w3r}ffZAw%=p9b,RD*!r8w-R!8>Gk72zgJyFgI5d$AGc:!Oju|F`w_1lQL+m');
define('LOGGED_IN_KEY',    '#hw58PU]R|?.M2![O>.]cvtEi}Q[q?1h$m[.lGua(Jo6Z$.9$=<0IIuy.z0 k&.U');
define('NONCE_KEY',        'n(qhw~e)ClH-lsA^!8};$(_,l<l`5LnV.:KB+/J[sD(MlR/L9H/TLq5ZSlQDaFM ');
define('AUTH_SALT',        'bzl;08fmyTH{7*|ktF0+=mzKPni`4I+O9WAioi(7t;2h=u-otT4#vQL]3/bTB{F[');
define('SECURE_AUTH_SALT', '@I?z}SQ1R?uF.q4^_IXi~RB(agH766+]b8,fWj]lGjzg^Mvq9fO>Il-}olq/}fhr');
define('LOGGED_IN_SALT',   'RVrxGX|_z/kgSSXAC<}r-/FW~XSk*srboFwP0 sf+~,skc?(cWcbwIqz,YNs,rT>');
define('NONCE_SALT',       '4U~|CS98YLu(SdKARG(:1x<TG&3_~*Dv0R1dOIgxd_<8AAcPsnnP32FZK;#+iK}|');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'aerowp_n_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 */
define('WP_DEBUG', false);
// define('WP_DEBUG_LOG', true);
// define('WP_DEBUG_DISPLAY', false);
// error_reporting(E_ALL);
define('WP_MEMORY_LIMIT', '96M');

/* Isto é tudo, pode parar de editar! :) */
/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

