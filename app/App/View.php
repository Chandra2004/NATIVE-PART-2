<?php

    namespace {{NAMESPACE}}\app;

    require_once __DIR__ . '/Config.php';

    class View
    {
        public static function render(string $view, $model)
        {
            require __DIR__ . '/../View/' . $view . '.php';
        }
    }
?>