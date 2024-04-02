<?php

namespace IRFANM\PHP\PORTOFOLIO\App;

class View
{
    public static function view($view, $model): void
    {
        require __DIR__ . "/../View/Layouts/header.php";
        require __DIR__ . "/../View/". $view .".php";
        require __DIR__ . "/../View/Layouts/footer.php";
    }

    public static function redirect(string $url): void
    {
        header("Location: $url");
        if(getenv("mode") != "test"){
            exit();
        }
    }
}
