<?php

namespace App\View;

class View
{
    public static function render(string $template, array $data = [])
    {
        extract($data);

        // İçerik şablonunu buffer ile yakala
        ob_start();
        $templatePath = $_SERVER['DOCUMENT_ROOT'] . "/mvc-architect/app/view/{$template}.php";
        if (file_exists($templatePath)) {
            include $templatePath;
        } else {
            echo "Template {$template}.php not found.";
        }
        $content = ob_get_clean(); // Yakaladığımız içeriği $content'e al

        // Base şablonu buffer ile yakala
        $basePath = $_SERVER['DOCUMENT_ROOT'] . "/mvc-architect/app/view/layout/base.php";
        if (file_exists($basePath)) {
            include $basePath;
        } else {
            echo "Base layout not found.";
        }
    }
}
