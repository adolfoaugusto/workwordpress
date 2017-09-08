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
// define('DB_NAME', 'word_ad');
define('DB_NAME', 'theme_adolfo');

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
define('AUTH_KEY',         '+}$TOzT^$.Mk+|U;N{YC1]YrFP4%v@2?%:`@jPaIoFmqX%7aJ?~SQkr^TXe9CxyY');
define('SECURE_AUTH_KEY',  '`Tv#P[v52V`QAYj`|dx#;lj)}Qc)Z*9GT!Z{c0=j/rFfCBl8!G#&O2y#*mE1T5 3');
define('LOGGED_IN_KEY',    '|K9pr_QX9wspc>Edr<HghSWRt!L~p%#$vtTidPRU!;+S/h+i~$vuZ6;Y~J>~s[-x');
define('NONCE_KEY',        '8qVM)3,b/055sx SRj(x!vBMyva.t34ru,.tNcRMRSfIQ)q~50<k)oejvM(U,X.J');
define('AUTH_SALT',        'RJ!H#;2mF9T#7_zyFtCgy~HAygTFx,;FY<F0M=_v6qQ6hZAU8Temm2GRwxFeG@^q');
define('SECURE_AUTH_SALT', 'r@ C8 b3lN9m !2=iZNx1b<d1paZ}PH/y*LH|{$%E[db[,cmUN.L<!PelN[#QXp0');
define('LOGGED_IN_SALT',   '-=$QN:l|fBMt&xHC& @FT C}r]W~e2h96OOG>OWOaUv46NJ9c@VCC$LQf@Le}e1=');
define('NONCE_SALT',       ']iFP4n7|?oqAA.0n>JaN.2zbP0#:HigZ3}s8-S%9_18voDBO(:#|(Guke#Cc;kpj');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'ad_work_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */
define('FS_METHOD','direct');

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
