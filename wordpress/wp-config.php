<?php
/**
 * CloudPress WordPress 설정 (자동 생성)
 * DB: GitHub 레포 내 _db/wordpress.db (SQLite)
 */

// ── SQLite 연동 (sqlite-database-integration 플러그인) ──
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );
define( 'table_prefix', 'wp_' );

// SQLite 플러그인 설정 (DB_DIR/DB_FILE이 실제 사용되는 상수)
define( 'DB_DIR',  __DIR__ . '/../_db/' );
define( 'DB_FILE', 'wordpress.db' );

// ── 인증 키/솔트 ──
define( 'AUTH_KEY',         'uysnh0hwxh3xay8fe74knn17dg0cnfsubslrqzxnoo6bguhvb1epprcgkr0ib8w0' );
define( 'SECURE_AUTH_KEY',  'fifqx9p71kn6zamun3cbu93w9ivm6zdl1gbb2ptls84puauyrx01viokghu3qgvs' );
define( 'LOGGED_IN_KEY',    '291cirdifoqoot5fjyslt1nc6lgpsm5pylauzeloxbd1pqcxxyd24p8tk3lhlimw' );
define( 'NONCE_KEY',        'up7k8u3inwbk9me1zodoazx2o151tq861anpbofk07a7idg5dhy1iub98dqzwcwx' );
define( 'AUTH_SALT',        'ap1xw65l11vjwf6a36lzpqleosbb21mtgdrzw36bwb9at2wtk683671tgky8ilvq' );
define( 'SECURE_AUTH_SALT', 's005w1zts4tfct3fdohc73v5uypb6mnc7tnryox9n5lz791ghik3dlxvu7b7b3e4' );
define( 'LOGGED_IN_SALT',   'c1bac9ie087wsgzy29ugmvtirlzk9g24izvwxv040z53baaoq4b9r3rfbgw2o2d8' );
define( 'NONCE_SALT',       '3h99w021zl7z6ifh8ojd4ml78qw4fwfueb3lq4hegzx2dfuyisv7bvr71dznoijq' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-a9c43ecc-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-a9c43ecc-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
