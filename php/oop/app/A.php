<?php

namespace app;

class A {
    protected const TEST = "Class A";

    public function getTest() {
        return self::TEST;
    }

    public function getTest2() {
        return static::TEST;
    }
}