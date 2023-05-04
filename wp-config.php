<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'pr' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>vq%|qw7eku!1^:pw^C =d:d<SeO65UQ{EPyL;p;F5?Y4VF}|k`*.^Ea;^V,cfeG' );
define( 'SECURE_AUTH_KEY',  ';|c%Zlc-,((0d5liIY}$z56_k@i}lf|30bmt:?,^=oJYDhflAhDirob?2iqUiUJ{' );
define( 'LOGGED_IN_KEY',    ')sO:+bt2@9wLE`hUX:Elf63dD{hiv]AX~q[Ar$?4:>hrsMmIV^XS8*s>g#IgFkMC' );
define( 'NONCE_KEY',        'y7C<|G*;hr/T1BKs~Cq,YnuCCR3I])V@?!#3WWtVj<l6jR8IN4amC483EVGV0PNP' );
define( 'AUTH_SALT',        '+Ny/E#VtvBm33zJmqBhB^ZgWlFjfhA_bbA]:Y2Nd{.LgT+eVN+]cXll`~MjZY0h]' );
define( 'SECURE_AUTH_SALT', 'N_F(WcX[Hw@>edfKw1j}J6^-#*U?ZAR19 9tDIEj>lB/x~c$]ff}x_/D(1=#|*T+' );
define( 'LOGGED_IN_SALT',   'dgbibn.;IHkso5^4m8k1+Ps]nU-?YXg]hb&SUeiD?:KsIyY`3.s+Kk*(v0ARfW1K' );
define( 'NONCE_SALT',       '@8,o(b><bgb`lY`Ik@D}o^s]ZswFDMH9@Vi+d}?FCs #*3hHDFu*Ls_jRQ- K6Aw' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
