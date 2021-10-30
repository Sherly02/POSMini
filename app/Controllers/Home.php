<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data   = $this->get_product();
        echo view('product', $data);
    }

    public function get_product(){
        $url    = 'localhost:8081/product';

        $ch     = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        $product= json_decode($result, true);

        return $product;
    }
}
