<?php

namespace app\controllers;

use ad\App;

class CurrencyController extends AppController {
    public function changeAction() {
        $currency = !empty($_GET['curr']) ? $_GET['curr'] : null;

        if ($currency) {
            $currs = App::$app->getProperty('currencies');
            if (isset($currs[$currency])) {
                setcookie('currency', $currency, time() + 3600 * 24 * 30, '/');
            }
            
            redirect();
        }
    }
}