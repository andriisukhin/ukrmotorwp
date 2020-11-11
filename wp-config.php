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
define( 'DB_NAME', 'ukrmotordb' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'R)GDtWs2K1U]0eT><*4&GBNw~MI*vveD>vEPyK?8{N171HAW$X`0qEsBE(%+1f[#' );
define( 'SECURE_AUTH_KEY',  '({oLtQP*7!_}7sbG8./M6D0$~!8:k8e5Z]7KQek!KkznG}-Kk7={Nol/a,MW$&A:' );
define( 'LOGGED_IN_KEY',    't?vk?i!~P-76;5EFD&%7X*o%lBjqiv>LQB6:X5HZocYHRBr`nczSIogiIIsOqT:&' );
define( 'NONCE_KEY',        '@|!!lq?t4pWG^gO~_<p{Ik$c*Y7@1J+u<~k8GOQO~ITW1!yd,^#9jGtPIWhz}9Q2' );
define( 'AUTH_SALT',        'PEPf:wv!#yay,zD$>LS#l&4nd5D^S?hA[l/kU]9B#er2/=rYxEo;w-o3]LNe9SdI' );
define( 'SECURE_AUTH_SALT', 'ABci.2SL&9pI,a_J bJgTR$|i6RunHp;(N?&Dz{N2/LTT#_zFlGU_6o/:0xv%sz_' );
define( 'LOGGED_IN_SALT',   'I46c|HMw*3hI>W)/eq7x%X$QHT#5h[MF0~rbmT6k/z.aGWl}P:~ }:hYLDRj0a&y' );
define( 'NONCE_SALT',       '<s=Pzgn3q_R;%EEbD4CQJX`wjmza)(*]Z]{~E]5KgAGejiqR/qKw+Up!0~A;1Q{9' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'ukrmotor_';

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
