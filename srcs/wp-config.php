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
define( 'DB_NAME', 'ft_server_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'arannara' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'qwertynara24' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '2{R~e%=nm/W/mI&zJqP}m.[2+o_cC%$vqb) e9(pr`JlruLbefr|%!d@8& 4i5GP');
define('SECURE_AUTH_KEY',  '/CC|>j;5NB3dreHp6DbMjr>EeM_Fs,I{Ad;ThLH82vtb49G-YTG*/$FQjG]kYB_c');
define('LOGGED_IN_KEY',    '1{<v{CZEK]#DKtyb%ou5:.n@HJ$y_D4QL>(b4~[h74K_Hs$R8)V(J|.9^riY]M~,');
define('NONCE_KEY',        '$POX,}kCi2f#5t8)nd$SwjSVFdAg[ . bFK8wL[~P]#Gt*~o#h-^D:r.2}v5|I8Q');
define('AUTH_SALT',        ';j[A1,8Vzd%Y/#Xr(iTdQln.2gM8WKaZWb/@w$&_t<>y(mG,rYbyaU$|P_/ :A$u');
define('SECURE_AUTH_SALT', '&;.)qVQ5s2VA%~8R>tDqOG>W-v^=d<e}e5daXV9Mb+Z _~Y][On89*u.:wR!{M,O');
define('LOGGED_IN_SALT',   'd<X*Sm5|xa8VCm6|g@dC-tf;8jv^|X ;@,le(t07oLE|e;K#<UaOjR1U,<%2(V!8');
define('NONCE_SALT',       '~*rOYTA|%eCH{I^;.Qqk)WJq#l`+YQV@g*Us)_/8]D`.q*U>>X~7cZG%m^!{Fh#9');

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
