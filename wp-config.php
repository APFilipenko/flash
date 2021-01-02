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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'flash' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         '>l2jq=@rJ|F)DONn]059PSIWG~,jlV9QPC?b1E~10k`iEBP]h0eX,G#.bSi:X=-G');
define('SECURE_AUTH_KEY',  '-KAr|yaJPHo2i^-F_Y/FeYm=DqA+%/U[j5LgKXmVOteaWuci )Y6lU>Ehe@f4Pk^');
define('LOGGED_IN_KEY',    'm=Q|c$-+;MOB!)3*HR/7trw(NkGTw0n0Cu8@LemQ5oFz07`Ep$,*_hR,bv]YU3Y}');
define('NONCE_KEY',        'ydnT-e/K}0M}4gKL@^XCS#}/tRQU9,5ZTRo/uMI +Y#~1y//oOd,|:S,}OP [eCN');
define('AUTH_SALT',        'I[~xq61-5iaJ70n|+~/7R%{L-MJ_/Y6FGU8`4g#T6+(u|TEsgn~ D+krgXT|i&G$');
define('SECURE_AUTH_SALT', 'JouBns!.@,J*[n~Q{C/sy>$gYdg 28C-Y@z9c~wC41!`N52I<DLr6:E{.qRS>|8?');
define('LOGGED_IN_SALT',   'RgV<Pw^ w/-> c2D67kbpB[fZwi;G$iJVF3Z0%OGeWi&f9{CHh}w<>q-Kx+KvI])');
define('NONCE_SALT',       '#6I`+J4BHu)G]Weq5s:f,w`!at}P,8$I~|oV:F1]-[dw5JV `D]q_/:9FMkd,%NM');

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
