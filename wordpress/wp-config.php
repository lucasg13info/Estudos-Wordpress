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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '=z-+5Z%YxzM6LqEQNa8&v,q-KME|(%~zfK$Yj?QmhdbT2_A(3LMJ9Md><tMb<@yx' );
define( 'SECURE_AUTH_KEY',  '/8(:)FxrLp.c+|9;hG!l*k@;)Rdd=(goIHUw6#,Q%}6!:dArLw6c7qvO)}oSk+qd' );
define( 'LOGGED_IN_KEY',    'm|]U1]F(p;(:R`!g@0uD/?q)5y]|Yx;Dqo&J*5|tg0(3dpFnJ:49GzMrGL2=n~(}' );
define( 'NONCE_KEY',        'H1IUaF0/L`h.XGMuK_t!v!HHxB}HnY#uT?7@z+FSnB6!1&J]QN43~P-qD_p2n$f=' );
define( 'AUTH_SALT',        '5s$8oBNYGB)>sL+ As73>:d/U1xf0*n+R]Z,DQX#b~_ZJ_w~1_lWQs`yP*T]`9Xt' );
define( 'SECURE_AUTH_SALT', 't}PCL3{-U$w^R}R9?Iea qlkAi/u,>(*#D-ff{qY4G=Exvr6&yz9 ;s(-i06ptIq' );
define( 'LOGGED_IN_SALT',   '~Mib*YG[J-HKCVArf(`L8P5XS!z%P^kx6W X!8!J@..%!x)C{@IT/CZoaS235_uu' );
define( 'NONCE_SALT',       '.BJg;B@IY&:VO0Nz278(f{%a3IfWc3f+Y#x-nc]Na^n/vNm^+Ya@V/Vn 5)M&7Wd' );

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
