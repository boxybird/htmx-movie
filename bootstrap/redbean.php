<?php

use RedBeanPHP\R;

R::setup('mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
R::useJSONFeatures(true);
R::freeze($_ENV['DB_FREEZE']);
