<?php

namespace ad;

class Db {
    use TSingleton;

    protected function __construct() {
        $db = require_once CONF . '/setdb.php';

        class_alias('\RedBeanPHP\R', '\R');
        \R::setup($db['dsn'], $db['user'], $db['pass']);

        if (!\R::testConnection()) {
            new \Exception('Нет соедниения с БД', 500);
        }

        \R::freeze(true);

        if (DEBUG) {
            \R::debug(true, 1);
        }
    }
}