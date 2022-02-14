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
define( 'DB_NAME', 'agencia_innovarte' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'rx%HuMi, KIR8c-l?JY$t^A#Pe%d^`LaGXb 8P|gH $!2DG5q~yMH27aL-(/-Na}' );
define( 'SECURE_AUTH_KEY',  'W:fzL?_CO1=M8hvI:%X|y<?cAjp:ncdjGVlk]7Rlm-n2BfRaAjXA8Fw;zO<J^+uD' );
define( 'LOGGED_IN_KEY',    '^1.jjD]}P|1wXGwV_Ju1^rLf8=Q(,h>=xh? 5mGm}U(ZtO@LCfkAM^.?[7GKnw};' );
define( 'NONCE_KEY',        'xk?*PUaj76qvL>(jO4! *7v7LI(Cwpr:mb9P@N)Rtut3sXgFpHVWdQmh!vY~+f0+' );
define( 'AUTH_SALT',        ',fiApG%: <wES2s]:2&l**P![;8z}o@<`_4/n5N(PMw:7J}.EnOTUT$br$#P7nAo' );
define( 'SECURE_AUTH_SALT', 'kMvMh:}*t6;JtXED@4+u[=$p8j9g&2YP83i(.OWW];I**<zAwIWTm.uHTr,B><t@' );
define( 'LOGGED_IN_SALT',   'd`x3IhJ2zAby;1=NU,{#1+b}[+T*u+6se_7g3;/&U@~zbA{9D#>m1s.P9NG]F0e%' );
define( 'NONCE_SALT',       'T#:/gt~&h2VTa;hOS>0FbJRn|ZuAIxPRv;qb)>c-n,mx<fD56a}`4>n#P,*;HeBK' );

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
