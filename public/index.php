<?php

require_once dirname(__DIR__) . '/config/init.php';
require_once APP . '/views/loader/webloader.php';
require_once LIBS . '/functions.php';
require_once CONF . '/routes.php';

use ad\App;

new App;