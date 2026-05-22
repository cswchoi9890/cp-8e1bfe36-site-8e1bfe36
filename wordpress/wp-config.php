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
define( 'AUTH_KEY',         'qcby3z4qtoac3vdja9ai4c3h7qxz83it1kaezx974erzx5ai8953taum8epxid1i' );
define( 'SECURE_AUTH_KEY',  '2tnij35dx3ja4z6fxmx02mu2yjay5nc56umpjf2rqqluofy6y5gtoovkzx3rkamp' );
define( 'LOGGED_IN_KEY',    'jbaj3lddpemmzdnhv7d7ltbs92burloz1evmrvycw9s0tfjbzfdydb10eu7cmxln' );
define( 'NONCE_KEY',        'gnsbq6svjj3o8b0pajqa8iw7t5qvlj8iq06mi5uzghpihe9m3c1zihs6v34yqiwd' );
define( 'AUTH_SALT',        'ojpyssbidk3cm5gty05hk3zaauf245bd0692qcxk1jcczp4qdbdj6lbqht6bmypl' );
define( 'SECURE_AUTH_SALT', '7n66kosbfacevsaos356p5u5fyb52bm5wsa8mb70ka2ig5kok0kplzwn2acvbpki' );
define( 'LOGGED_IN_SALT',   'pmcbx3sv0g2aq6z0888kzwjulrwtu08c6mignk3k7o9bsctvjm0w7nfoqkfm5xc5' );
define( 'NONCE_SALT',       'a4d226gkmqel86izy9enl9p1y1ume9voqnnxb8sr1uaiejx1xguq8q0y6k9gmxm3' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-8e1bfe36-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-8e1bfe36-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
