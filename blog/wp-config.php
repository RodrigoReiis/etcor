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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '#1S[AT v_ICYJWICs#*i_cc4f05~4k7QaAuhMicEBo#C,{[Rn+U)gCWy?Mk+tB`*');
define('SECURE_AUTH_KEY',  'aq@5rZo=6(7gX)8PdDDqXss(@>gi1%o`Xd&%Iv7NQg>AQ`2$+4[;qtf()cuPxrz-');
define('LOGGED_IN_KEY',    'aY2ax](JefahJ^Nk0QMhH?Rr}0g_eeNLK1m1 )P:G=:_d2)xLQ`J?u7SC5O6s7t!');
define('NONCE_KEY',        '/@4M`Z9EB_rq7y~{bA/#a5vaz[sP72vfBT##DDE@%JddM!b0FMf2:^Z&<g?EOijJ');
define('AUTH_SALT',        'Pwv3L$~dpUb.x~$)JNA44e8J9{9h1UmW|x0L)~).#jQ`pG9ez5#5)(JL)bcN{ce<');
define('SECURE_AUTH_SALT', 'bo?lHKM;Du}D0L2,rg^Gc{9^?FrgTX+in]jQ`iwzT I%&;B(IF7]sbmUw@@0zDKV');
define('LOGGED_IN_SALT',   '/0;Zi_p3F d6)d+?`} GQn%lhbn=!y,[j :XWOGi*QPcydka==:YQ?V8&>.ADZ^8');
define('NONCE_SALT',       'C^w=fb~j(^uh()BnY7QNIjgj>s/10lEC.1&vGoB0s.::malW?9R|)}peRB<~((tT');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
