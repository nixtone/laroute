<?php

namespace App\RMVC\View;

class View
{

    private static $path;
    private static ?array $data;

    public static function view(string $str, array $data = []): string
    {
        self::$data = $data;
        $path = str_replace('public', 'resources/views/', $_SERVER['DOCUMENT_ROOT']);

        self::$path = $path . str_replace('.', '/', $str) . '.php';

        return self::getContent();
    }

    private static function getContent(): string
    {
        extract(self::$data);

        ob_start();
        include self::$path;
        $html = ob_get_contents();
        ob_end_clean();

        return $html;
    }
}