<?php

namespace app\controllers;

class CurrencyController {
    public function changeAction() {
        $currency = !empty($_GET['curr']) ? $_GET['curr'] : null;

        if ($currency) {
            
        }
    }
}