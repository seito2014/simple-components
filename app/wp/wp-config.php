<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', '_seito201_8iuk0h');

/** MySQL データベースのユーザー名 */
define('DB_USER', '_seito201_8iuk0h');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'bsvv9yc8d5cbrh');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql505.heteml.jp');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|;*_d!Ah}LfL@w}oa&!@ozH#-G#FgFI8UR]>SWzv#U|]Ha9#f#]J1dM#$PIkyviJ');
define('SECURE_AUTH_KEY',  'C5bzSQlV&#sMcsP}vlmmF?pJi=:X$w9Gsb{A-!z<%idhR/9Cym*_5xie&w[+j[PR');
define('LOGGED_IN_KEY',    'wpw8rm:vKsS55S|u_G+@_ry~d,JCB2y=ik;PNAA1/wx+F:4dV%xtvm/PwWw>PkG=');
define('NONCE_KEY',        'LWg30!v%yi:^x+1I/p[9RFOE5AWK&6cRS}LJA{O>8cMwmD_z.QyezC$vhZ`nW2`+');
define('AUTH_SALT',        '@kTV!!o9e@wGX,`kb:FRRIC?#c6ZU]ip7[A8^*71}u}04XbWm!)^KJMM&J(afoFc');
define('SECURE_AUTH_SALT', '9ja^sY;-IN#D&d3re!&+LRVR4c-ZHQ]H@wf$Lv:x}<@Eu:<P<[Ybm:.hq^{=nTZ8');
define('LOGGED_IN_SALT',   'F`!u,;iJC3r=*7g_>`z5J!c@_3H#M!!w{#hG>FtV~bmHYIfriVm-WFBv}nypozb%');
define('NONCE_SALT',       '2~L,i_g#zIJOv+`Te#f[I9)lo5QTv.XnL$y:|U<=6agrj5BE89aH!h.pcc~Np0[@');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

add_filter('xmlrpc_enabled', '__return_false');

add_filter('xmlrpc_methods', function($methods) {
    unset($methods['pingback.ping']);
    unset($methods['pingback.extensions.getPingbacks']);
    return $methods;
});