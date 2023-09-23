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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'projeto_financas' );

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
define( 'AUTH_KEY',         'hSqfZS/us#gDiLMP@^{PSB*koH//&$6H-SlPbvp.6~OX_`qvtZb^Pa7RH@xHDVsd' );
define( 'SECURE_AUTH_KEY',  'wX$+CRsRc<%vN7)F]^9rj$0^S=uN[IQs<olpWMce)d*i>(A!yTMm4H*a?,e0k<Al' );
define( 'LOGGED_IN_KEY',    '3cJG?Oie4bU9[~KxTemVC#aY$(PC4`e8ln=^Jf.l4zX^X<qpx~M/wf@A3LXT&,OQ' );
define( 'NONCE_KEY',        '`Z:.VtfmGCmTvR`fmqL0<O`r:>?/4N.4kvp 9em!HY^1NaIOE>c{2dJ.N3/np_ik' );
define( 'AUTH_SALT',        '~<lA%Nzh=.NF/A6wd,p`ezf@3_<IQ+ }WZP*`Rl9%&t8isD.?Nk&+;6-C(cCl%>s' );
define( 'SECURE_AUTH_SALT', '@eOcMH:c=OypiR.z04AD>]QTPlFo?)@jw#`l^:!t`z;5fig.)Sj`BqK8xf^F|A-|' );
define( 'LOGGED_IN_SALT',   'V@Qk?P*=MncsPiJye/$*=r.arrODBSH}:X7P>QqBF(Ao[qmG%fq8bwthHK9A@MMF' );
define( 'NONCE_SALT',       'i{pt<%01?y]9n(bE0.}i#rRKn,uN`9([}}8O)RHOWk,tJ#dAE;pFS*sr7fZOFWn!' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
