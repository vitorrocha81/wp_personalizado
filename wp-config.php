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
define('DB_NAME', 'wpdefault');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'teo123');

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
define('AUTH_KEY',         'OdqA+d@i#q}35vQ^b&R`Fpln^z2h}eCKK#IZ|ml[hz;Ne{XLE7u!/aZjP6ccVz.b');
define('SECURE_AUTH_KEY',  'JU.5+shh@?ai*=BBeq[4~aA5/sFbd#S}f(gWXs7z!]i4|[WE^kr<;W}((O{MQ%EK');
define('LOGGED_IN_KEY',    'x0~:M.s%[(IYwY&9=W>HcH,`vfq/cP[`8sKb>EE7L<p31OM*wP_B|igo#[<8n}4>');
define('NONCE_KEY',        'PO?|kE6-YR|!RW3=c{oC^ka`( pPbJ7ZQ3MJzaM%1W@+I17raEm0/+fnOR<%<3=m');
define('AUTH_SALT',        'l/Kg~4d+3l:u!cR!pLCl?[Xz&e?:$Xsh=`6I(wXJBwxvB0Rh+7{G=Ji9c}b5WHl9');
define('SECURE_AUTH_SALT', '1k4}tHD^J_&AUMt`Ju@wOr|UtCd&JIV)MF;NsFKD8P <Ug@bx;.*eG1vah^HyTB1');
define('LOGGED_IN_SALT',   '2LT`aT5G1A-of&5`vfY i]r3{l{kgr=Tm6QR:biZH~}y;NPGuw.kD*9Ea~ZN% G9');
define('NONCE_SALT',       'WEn<@Wv8zC~wN7N?n*,5DmXV7 4g40j{_xBQH~i?5+fcgAq_^bugFS ^t{zYg`X7');

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
