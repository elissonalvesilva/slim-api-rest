<?php 
return [
    'settings' => [
      // Monolog settings.
      'logger' => [
          'name' => 'slim-app',
          'path' => 'log/app.log',
          'level' => \Monolog\Logger::DEBUG,
      ],
      // Set default timezone, eg "Europe/London", "Asia/Kuala_Lumpur", "America/New_York", etc.
      // Get full list of timezones at: http://php.net/manual/en/timezones.php
      'timezone' => "Europe/London",
      // Set multiple language accessibility.
      // Get full list of languages at: http://www.w3schools.com/tags/ref_language_codes.asp
      'languages' => [
          'en' => 'English',
          'pt-BR' => 'Brazilian' 
          // 'da' => 'Danish',
          // 'ja' => 'Japanese',
          // 'ta' => 'Tamil',
      ],
      // To see the whole error logging text.
      // @ref: http://help.slimframework.com/discussions/problems/11471-slim-v3-errors
      'displayErrorDetails' => true,
      'db' => [
        'driver' => 'mysql',
        'host' => getenv('DB_HOSTNAME'),
        'port' => getenv('DB_PORT'),
        'database' => getenv('DB_DATABASE'),
        'username' => getenv('DB_USERNAME'),
        'password' => getenv('DB_PASSWORD'),
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
      ],
  ],
];