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
define('DB_NAME', 'kf');

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
define('AUTH_KEY',         '@UXr^r^$(xt)^KV3=+R9DC*m=p$]|>:Cf9N}1i-?e@^=fSMQIOe,0b3l1/kOH|*}');
define('SECURE_AUTH_KEY',  'uL>p2CZOnuZ;zle#`#V_E1+`G>)1E!fH,AgZ<Z`9AD.Mw7i<#)w_M+`M9-ajM`CK');
define('LOGGED_IN_KEY',    't 8_LTcHpax!VBj0m`;E=RlMg$_94I0JkA?4.!?rZES+/@[IZ,A2!J:x[ tnJ*]-');
define('NONCE_KEY',        '*32!hbPDF|2yfV{s=5pfI~hr^%9M9b;Ve^i_o6C #i.3HaKkxAPL680oA@<ymT{N');
define('AUTH_SALT',        '<YN,oQ)|}i:xVm@g.?+#$^rDBVeEFLafEz44oRSK|jELg)HTOnsG6zR?Mi0KV1p`');
define('SECURE_AUTH_SALT', 'G3tY1K;5Ql|  uqiFcu$e<!&N&LsmUiLZJ-C8||.r%.U`Wdw3@F< ?^]NJ=_^;Sy');
define('LOGGED_IN_SALT',   'QMY{WS(44u$Y;O.@Wt%j&$j5R)yF0;C}/<s=,g5/?KyD[m:^0w=<BxxZt>2DCSxv');
define('NONCE_SALT',       'Db^f[C&-L]G:pF@P%4VX/s+ALM33w:;8|Pa{R~^/i{!uxG O4%.1:V_(LVPEL&/>');

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
