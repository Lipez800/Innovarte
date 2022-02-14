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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'gbcontabil' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'gbcontabil' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'gb@01#02' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'gbcontabil.mysql.dbaas.com.br' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'zw3M+K7nifX1Y/8IFJ?4%TMPEGsNTDHIh#v;=7niBiUzBl?:I(c0]mg2Q<aG}D<;' );
define( 'SECURE_AUTH_KEY',  '@]p]^f3<qPMm G;E9TPYU4H4r1,|f]P>RsAKyD/P~1f}!i:Fq<3B.gJ3rpBM#_n3' );
define( 'LOGGED_IN_KEY',    'gsvkTXAks eFNoN{:UFN`~3mWl2VZ(o>;%h^cZmEOl.~liO:kt<B.u,KTxgt}%7X' );
define( 'NONCE_KEY',        'rE-^A>-u)V>6@WK.zx=oY;7!VG$[1%K^V|, rZ#Ep4F09~hiYKe6m,OuGLiIjb.8' );
define( 'AUTH_SALT',        'qKi+!|#i~I<|fqkAY<z|2dRA{tJb~M!~<_w7y9yJEX4a-<L X[4uYPRw[i-V^84g' );
define( 'SECURE_AUTH_SALT', '/z??(5uu-g:9P|ZB~A ]n+{0iq~D6UOQr%U8m#t{_w^DYg,za{&F5_jD}K0bwNjD' );
define( 'LOGGED_IN_SALT',   'rt*$bx_ADj1i0#?=z^?+{bUOQc$Q8cgOu9y=S _A}}KDK`}pv7 9TSM_pXGW|ieZ' );
define( 'NONCE_SALT',       'W4noIV4!?XSoo@{{f+nG>og,-j5d<gNMvz=89zKhb?TvuUY&O2fvN>JEKXXT%5<L' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
