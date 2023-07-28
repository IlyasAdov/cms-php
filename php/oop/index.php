<?php

use ad\classes\File;
use ad\interfaces\Test;
use app\Folder;

require_once 'vendor/autoload.php';

function autoloader($import) {
    $import = str_replace('\\', '/', $import);
    $file = __DIR__ . "/{$import}.php";
    if (file_exists($file)) {
        require_once $file;
    }
}

spl_autoload_register('autoloader');

$file = new File(__DIR__ . '/file.txt');
$file->write('Bye');
// $file->clear();
print_r($file->read());

function say(Test $class) {
    echo "Say: ". $class->getCount();
}

say($file);

File::getCount();

$file->setColor('red');
echo $file->getColor();

echo '<pre>';
print_r($file);
echo '</pre>';

$a = new app\A();
$b = new app\B();

echo $a->getTest();
echo $b->getTest();
echo $b->getTest2();

$folder = new Folder;

$folder->doAction1()->doAction2();

$folder->Lala;