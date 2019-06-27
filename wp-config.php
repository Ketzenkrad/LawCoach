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
define( 'DB_NAME', 'lawtheme' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         's)A~-/nw;KC<}V#IftK`G&MCapBp..NW|};,>-}]@o#vf})ea>^$a8:uaeDU=53?' );
define( 'SECURE_AUTH_KEY',  ' V`;# .foM3#a6G#QAm&.pGi!&SVA;u18KXu?]&@eKKFoQzTsQ<T9Zmp5.UTt7sA' );
define( 'LOGGED_IN_KEY',    '7&p^=dC=}4-wXPo3l7|PBXi%g]&{s8z_?Ec/4rXXs|EA9D$Z{V^V-`n(U#vd}wJc' );
define( 'NONCE_KEY',        '{$zc!e)w9tn*72PK>N>:]~#>/OAn=iE@|WX!@=z4L9R6f6DHvp*z}9S9M]g[J^Qr' );
define( 'AUTH_SALT',        ';s{PVBFCXZd[b_jT5}qb.i{qZXS})Ods-mY?EneE#)0E<<4l.!cezu]csXiH;1)@' );
define( 'SECURE_AUTH_SALT', '#A=Y]@th_#.QtM,X$URnIP%L^eu&Bo.n*ILKAahl(u+<%|V/iiUibvMAtz7T(x*m' );
define( 'LOGGED_IN_SALT',   'XD9T>F0Tmo0hn8EA-TIkDzA`xZC6^!,m3>aCmt&vZ$|L>E`5Ug0]]dx@x u|(Y_G' );
define( 'NONCE_SALT',       '#>vkrsK04AY^rd_`Gl2HeLu>0 R%a8+=7G/]6r$[%PnXkY2^ngtIPn{=~dAo-0,@' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
