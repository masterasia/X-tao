<?php
/** 
 * WordPress 基础配置文件。
 *
 * 本文件包含以下配置选项：MySQL 设置、数据库表名前缀、密钥、
 * WordPress 语言设定以及 ABSPATH。如需更多信息，请访问
 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 * 编辑 wp-config.php} Codex 页面。MySQL 设置具体信息请咨询您的空间提供商。
 *
 * 这个文件用在于安装程序自动生成 wp-config.php 配置文件，
 * 您可以手动复制这个文件，并重命名为“wp-config.php”，然后输入相关信息。
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress 数据库的名称 */
define('DB_NAME', 'qdm114410477_db');

/** MySQL 数据库用户名 */
define('DB_USER', 'qdm114410477');

/** MySQL 数据库密码 */
define('DB_PASSWORD', 'turefalsefalsetrue');

/** MySQL 主机 */
define('DB_HOST', 'qdm114410477.my3w.com');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密匙设定。
 *
 * 您可以随意写一些字符
 * 或者直接访问 {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org 私钥生成服务}，
 * 任何修改都会导致 cookie 失效，所有用户必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+hPGss9FfZ5m}NTt>8l-H+Gb=s$RG|X(BPXWB_O{M+du>9q?H!&1WtB_:&?s#3I7');
define('SECURE_AUTH_KEY',  '9)5N;W>3O5QZ*LN52/wY/9}?PUQ-|9G=F {!jQip;SY*Ajr{JYcZ?Sg+s_/1,z|-');
define('LOGGED_IN_KEY',    '_Z)&;8%pG5}eZG+Z}uGG*Jyx}d!_X9q8|oP-v=u(@@RBd&7FOKEJa?lV&aM,RR;Z');
define('NONCE_KEY',        '$V{|:EEf+*`hO/n<~Zs7 W[Q9IfNjCw4(%_Rii%-i9fM,+hJnZH5qm-~Zq=+[d&$');
define('AUTH_SALT',        '@Fh6#^H39ItCUihP)8@wPAhA,JY>5(5R,:,%cQqxTPj:>-.)`C+f*pIqAd-d-^>g');
define('SECURE_AUTH_SALT', '#xcB5U1y&#Z>eh8<tw`.40@mZ)Mk/.ZH+XS*OBKd6.@L?=QeOc8i]1j/%Ww_jvlk');
define('LOGGED_IN_SALT',   '7jE4W}mjl&kAEq+G -c^?TbUH=!]?$p5 h5?=iCHwr5fq~~YC,Qx6 <V#HB|cU|Q');
define('NONCE_SALT',       ')74_+jOOQQDW56m, CQ?Hf XPL-G?q-sy*Mr{T;1@01~9,(B@y;UD;cHi$]>Nqxe');

/**#@-*/

/**
 * WordPress 数据表前缀。
 *
 * 如果您有在同一数据库内安装多个 WordPress 的需求，请为每个 WordPress 设置不同的数据表前缀。
 * 前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * WordPress 语言设置，中文版本默认为中文。
 *
 * 本项设定能够让 WordPress 显示您需要的语言。
 * wp-content/languages 内应放置同名的 .mo 语言文件。
 * 要使用 WordPress 简体中文界面，只需填入 zh_CN。
 */
define('WPLANG', 'zh_CN');

/**
 * 开发者专用：WordPress 调试模式。
 *
 * 将这个值改为“true”，WordPress 将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用本功能。
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress 目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置 WordPress 变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
