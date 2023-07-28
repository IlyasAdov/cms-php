<?php

namespace ad\base;

use ad\Db;

abstract class Model {
    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct() {
        Db::instanse();
    }
}