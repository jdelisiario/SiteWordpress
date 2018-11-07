<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'quimicaacessivel');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.=2IWaZI*Efy6FOb0t^X2z  SLI|70N(H;@k<$M4@rr*S+4 i}M}DTxB;aviKpDW');
define('SECURE_AUTH_KEY',  'o$}o5(I.92md2T.v]z4}l]JFj]<`UYurPw|VUrK`dw?6,c_W_`yP`g`+D-uLpPrw');
define('LOGGED_IN_KEY',    ',0vS/}d_ZgF>tya.0|*)2`qLDdRr=(%?Sqe3gcedo*$?43x-+L0SUy !_~,[4)#%');
define('NONCE_KEY',        '6?12+_!B^J@Xk$P}d9hpQpY;Vrw<2Y/g4-Z/%1?(Ia<v|q@~3aMY@8mb0118%<Qz');
define('AUTH_SALT',        '0D44E.BuuQ4H_`X^Ia?,Zp!Y4/Hl5~~C:m]b#wfO.IMj]Lr]zm-RaJIOhk:-4J,-');
define('SECURE_AUTH_SALT', 'kEPqm08`K!Mt!z!c@%fvark=*uPh.:9_ %hZ-Fsx,e+.8>ZQiTb*m,J*s; L#^PV');
define('LOGGED_IN_SALT',   '|_?^-2+tlS0/&R}&ThA)XhJ2?T_z&Fr]FgdCZN)cgr|H-{MqAIsNP1TLyb?ap~tr');
define('NONCE_SALT',       'MH%u?Z*F02<S*;FjgV;W@S=r<V<z_d3fxW_;76(X-!a7O?B3{B2SFt}CwI.gv!CS');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
