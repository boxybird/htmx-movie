<?php

require_once __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/dotenv.php';

require_once __DIR__ . '/config.php';

require_once __DIR__ . '/redbean.php';

require_once __DIR__ . '/helpers.php';

require_once __DIR__ . '/../app/routes.php';

app()->run();
