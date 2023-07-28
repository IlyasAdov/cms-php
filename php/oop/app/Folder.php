<?php

namespace app;

class Folder {
    public function printFolder() {
        echo self::class;
    }

    public $action1;
    public $action2;

    public function doAction1() {
        echo $this->action1 = 'Выполнили действие 1';
        return $this;
    }

    public function doAction2() {
        echo $this->action2 = 'Выполнили действие 2';
        return $this;
    }

    public function __toString() {
        echo $this->printFolder();
    }

    public function __get($name) {
        $name = ucfirst($name);
        $method = "get{$name}";
        if (method_exists($this, $method)) {
            return $this->$method();
        }
    }

    public function __set($name, $value) {
        var_dump($name, $value);
    }

    public function getLala() {
        echo 'Lalala';
    }
}