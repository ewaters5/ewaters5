<?php

$databases['default']['default'] = array (
  'database' => getenv('MYSQL_DATABASE'),
  'username' => getenv('MYSQL_USER'),
  'password' => getenv('MYSQL_PASSWORD'),
  'host' => getenv('MYSQL_HOST'),
  'port' => '3306',
  'driver' => 'mysql',
  'prefix' => '',
  'collation' => 'utf8mb4_general_ci',
);

$settings['hash_salt'] = '676b67d780d83cf9cbe6eab3ce76c80f6460368b';

assert_options(ASSERT_ACTIVE, TRUE);
\Drupal\Component\Assertion\Handle::register();

$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['page'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['extension_discovery_scan_tests'] = FALSE;
// $settings['rebuild_access'] = TRUE;
// $settings['skip_permissions_hardening'] = TRUE;
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';

$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;
$config['system.logging']['error_level'] = 'verbose';

//$config['google_analytics.settings']['account'] = 'UA-0000000-00';

$config['shield.settings']['credentials']['shield']['user'] = NULL;

$config['environment_indicator.indicator']['bg_color'] = '#1E8618';
$config['environment_indicator.indicator']['fg_color'] = '#ffffff';
$config['environment_indicator.indicator']['name'] = 'LOCAL';

$settings['file_private_path'] = '../private';
$settings['file_temp_path'] = '/tmp';

//stripe emergency backup code: fuzz-dlen-blxg-legv-gpex
