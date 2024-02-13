<?php

namespace IRFANM\PHP\PORTOFOLIO\Controller;

use IRFANM\PHP\PORTOFOLIO\App\View;

class HomeController
{
    public function index(): void
    {
        $model = [
            "title" => "Beranda",
            "content" => "Halaman Beranda."
        ];

        View::view("Home/index", $model);
    }

}
