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
define('DB_NAME', 'motovoz');

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
define('AUTH_KEY',         'Yq5e}<G|mVUQl3ym,-w%P6F$J+y>MgVgUnsdtF-*j-6V khj6NzQ$##s*lm*V$;_');
define('SECURE_AUTH_KEY',  '(~!1O>,1}B7]G8&X>!X_(T%tw=ca*<B`pc2tTapiA2/pE:s%CQ3h5V>8B=bR|$%O');
define('LOGGED_IN_KEY',    'So3eI|P`QhQmmd-/?f_(CG&evgm~*g#&saG5Aon<-BfCN .b.<.PvTS8B>E:CivO');
define('NONCE_KEY',        'U*x!+!F12YBxT4}BK4E!:lA_BQYdRgN);*<UaUkLcycM~Ve@#3c%vnAlA 4ZN+xU');
define('AUTH_SALT',        ' *T!$mkz;:Q1V_o4d7Vj*-vNpX_WFLAT|N/1lsM$A2.Pf%Tw8~bE~ad[8l}Z]iHm');
define('SECURE_AUTH_SALT', 'Au0<<L7+w-(<H!)O(Z6qk/PMup1Cr0BvRGo0$o)4:<1hK4BA4Y6wCy#3EWU%$!}1');
define('LOGGED_IN_SALT',   'S}4!2,E1hWTdQY%!wU*m31==H M{Z-S/z51sZ4: :YjO_46vp9nHrP]fRA$f] P[');
define('NONCE_SALT',       '-d=Tgj;Tt&8K+X%bf5fW60.oh;_PgMG6!<vX&;hmT~w/taZe+#);^#g0q[9t6.>&');

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
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
