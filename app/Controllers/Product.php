<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function index(){
        echo view('manage_product');
    }

    public function list(){
        $data           = array();
        $get_product    = $this->fetchList('product');
        $get_category   = $this->fetchList('productcategory');
        $data           = array_merge($data, $get_product, $get_category);

        echo view('manage_product', $data);
    }

    public function fetchList($route){
        $url    = 'localhost:8081/' . $route;

        $ch     = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);

        $product= json_decode($result, true);

        return $product;
    }

    public function insert(){
        $session        = session();
        $data           = array();
        $id_category    = $this->request->getVar('id_category');
        $product_name   = $this->request->getVar('product_name');
        $description    = $this->request->getVar('description');
        $price          = $this->request->getVar('price');

        $url = 'http://localhost:8081/product';
        $curl = curl_init($url);
        $data = [
            'id_category'=> $id_category,
            'product_name'=>$product_name,
            'description'=>$description,
            'price'=>$price,
        ];

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);

        curl_close($curl);

        $session->setFlashdata('msg', 'Success Insert Data!');
        return redirect()->to('/manageProduct');
    }
}