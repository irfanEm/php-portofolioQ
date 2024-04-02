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

    public function notFound()
    {
        $model = [
            "title" => "404",
            "content" => "NOT FOUND : 404."
        ];

        View::view("Errors/404", $model);
    }

    public function tentang()
    {
        $model = [
            "title" => "Tentang",
            "content" => "Tentang."
        ];

        View::view("Home/tentang", $model);
    }

    public function resume()
    {
        $model = [
            "title" => "Resume",
            "content" => "Resume."
        ];

        View::view("Home/resume", $model);
    }

    public function service()
    {
        $model = [
            "title" => "Service",
            "content" => "Service."
        ];

        View::view("Home/service", $model);
    }

    public function portofolio()
    {
        $model = [
            "title" => "Portofolio",
            "content" => "Portofolio."
        ];

        View::view("Home/portofolio", $model);
    }

    public function contact()
    {
        $model = [
            "title" => "Contact",
            "content" => "Contact."
        ];

        View::view("Home/contact", $model);
    }

}
