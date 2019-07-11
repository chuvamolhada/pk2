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
define( 'DB_NAME', 'pk2' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ';Y4o(;RXY*Bkx8n9ae8BOj7`cjfnzqWN^^kQ<cq{I,,^Gk0ux&q E}05ii{bi6=1' );
define( 'SECURE_AUTH_KEY',  'X.:apU)3lH[;vPJ6-Vo5!L&%Q[K-#p|j+Qx+anYWU31KT569#%QO[zBEDzX<I/_&' );
define( 'LOGGED_IN_KEY',    'Uc:cjl_zgW{r}R0JS<W:/2h}exwdz%=fPc6$q:aN#U${euCJG:s2s=I`k@~0Kp9>' );
define( 'NONCE_KEY',        'Z>Db,/Kl@pi39+b9LcHY<r4<hN^((bxtr7N@hA%{#;jxQ*S7=;msv-!ndij8px+u' );
define( 'AUTH_SALT',        '.K].|ACj)-Gr2Tb#1F5{*A=eu?~!5GKshQ/[2uZ@X-NTPD-[chX:UM0h8im3[Bwu' );
define( 'SECURE_AUTH_SALT', '@^b&%AxTq:JD|`Bo3g!qv4O^-<8~vPnj(bJwLU[tYGbb!qatoB!,3yu6P(V/a`*g' );
define( 'LOGGED_IN_SALT',   'xH[qLH:vN4#W|>|UC kJts+Y$aK3fLRJD3Hkc@*f@}vn`S#@n=l_1C.JlmOv6N}+' );
define( 'NONCE_SALT',       'zzoOocI$D/]y3)bxU/9J|oIg_xE#K-qrs>Ac5q$8|7ba(*o;fQqh/|=3DvwdD=M2' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_pk2';

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
