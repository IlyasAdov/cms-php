<?php

namespace ad\classes;

use ad\interfaces\Test;
use ad\traits\TColor;

class File implements Test {
    use TColor;
    public $fp;
    public $fr;
    public $file;

    public static $count;

    public function __construct($file) {
        $this->file = $file;

        if (!is_writable($this->file)) {
            echo "Файл {$this->file} недоступен для записи!";
            exit;
        } 
        $this->fp = fopen($this->file, 'a');
        $this->fr = fopen($this->file, 'r');
        self::$count++;
    }

    public function write($text) {
        if (!fwrite($this->fp, $text . "\n")) {
            echo "Не могу произвести запись в файл {$this->file}!";
            exit;
        } 
        return true;
    }

    public function read() {
        if (filesize($this->file) < 1 || !fread($this->fr, filesize($this->file))) 
        return "Не могу произвести чтение в файле {$this->file}!";
        
        $read = fread($this->fr, filesize($this->file));
        return nl2br(htmlspecialchars($read));
    }

    public function clear() {
        file_put_contents($this->file, '');
    }

    public static function getCount() {
        return self::$count;
    }
    
    public function __destruct() {
        fclose($this->fp);
    }

    public function he() {
       
    }
}