<?php

namespace IRFANM\PHP\PORTOFOLIO\Controller;

use IRFANM\PHP\PORTOFOLIO\App\View;

class Testing
{
    public function test()
    {
        $model = [
            "title" => "Test Halaman"
        ];

        View::view('Test/index', $model);
    }

    public function testParameter(string $kategori, string $id)
    {
        echo $kategori . " : " . $id;
    }
}
