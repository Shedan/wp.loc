<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wp');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'g,GfiKY?6J+`3>LPY-)]yuoos|HhLW$0T$_i)Jez+We;}jmjB<!6)Ikc=}fV`PO{');
define('SECURE_AUTH_KEY',  'jb)bZ ~WF@P(.3},QQ^ULZs^iTY7,xYB-,nz={oa,c2k*nWcJ@ w} sdnE9m(VIT');
define('LOGGED_IN_KEY',    ' )>`!GWy|JKbE.XK=<`:h8lC]_!}>KH9+P3xww/e*AN|Dg~mTp*j/^NPu qK0p]D');
define('NONCE_KEY',        '/?GC8pl70}jwE)owz)/y#<g.CB)sovAmGtC1x^:~hB[%VQ)8VH(stmb|0bT!Z(DZ');
define('AUTH_SALT',        'i2/7(/}H`$Y?I-zzD|ZEKL#N8uLW}md>efWq9|0.<2@V2M1>#C/tG6^52ykXBWGR');
define('SECURE_AUTH_SALT', 'mrTYD0p$_n>#&a/9o${yni]|8=vQ+vyx^ONruCnm~|$;~fm##DOwU(PyBx 0%ee|');
define('LOGGED_IN_SALT',   ';>+_|?sS|yLW*GP5Tk?0M}?ZEWU+%<8?A`kOoW4LA7j?HRW#_4}<@UY{/^!mS~]b');
define('NONCE_SALT',       '>Y+OQS ;XEO9^s D5{h?J+JD%8Pu6Y];2Mr%lu)Hwe4d2K;=`Ind-!;g5*s)KH_E');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
