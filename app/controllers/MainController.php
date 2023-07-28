<?php

namespace app\controllers;

use ad\App;
use ad\Cache;

class MainController extends AppController {
    public function indexAction() {
        $brands = \R::find('brand', 'LIMIT 3');
        $this->setMeta('Главная страница', 'Эта страница создана для Адова', 'Адов, страница');
        // $this->set(compact('brands'));
    }
}