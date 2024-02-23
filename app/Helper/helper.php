<?php

if (!function_exists('config')) {
    function config($path) {
        $parts = explode('.', $path);
        $configFilePath = "config/{$parts[0]}.php";
        if (file_exists($configFilePath)) {
            $config = include $configFilePath;
            if (isset($config[$parts[1]])) {
                return $config[$parts[1]];
            }
        }
        return null;
    }
}