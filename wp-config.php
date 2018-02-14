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
define('DB_NAME', 'petita_petshop');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Cabelera10');

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
define('AUTH_KEY',         'qR3 3lP70&e1x9A]y(!VB]Ez(!cb~^G{a2i+=}-G@3|%::D{rhq$(S.WNgFdL1>0');
define('SECURE_AUTH_KEY',  'v^FA83;8I$K6ifg;7>O K$5=>vfY%nN-05NY9d2e(r6/Au%VB5c(z,Ifw[80+nv,');
define('LOGGED_IN_KEY',    'LcF:-*NR^By&fdW#^P87o00[7(adS3FpeXle*Mkw{0,4p{~S ZZn#WAJ;,HVasXL');
define('NONCE_KEY',        'U`HQs@A:L0_oxE:3z=N3R}]gGJQBz~P^D$%(syI_H5PBW6,MAq!qiXMXN#F.;$nx');
define('AUTH_SALT',        ',O9Vxa9,(8PlB_}V[a`qhNdBruux:*r$!E31^&zUe>DYD3U9q&8 ?M}A{sIrEVKt');
define('SECURE_AUTH_SALT', 'kx{~Qm3#pg(GoIyJuX>{yRvl) uNf6&D>{=r{X3s6I=o:,)ko&C^k(H?tNZNI^5i');
define('LOGGED_IN_SALT',   'Lm@#.G6s8`@uv%$udN+!ttl-@>bnWQ#6.]GGo@jYQ;voG@}@sFc]C?QUyXEsF;2p');
define('NONCE_SALT',       'n=>%a15/k*Uu1dtM=ncV|.n]&Xg(CGgB9s0djK(cN L)k7.7R1O%ET>,^!lC%HJ6');

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
