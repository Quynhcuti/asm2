<?php

namespace  Peach\COop\Controllers\Client;

use  Peach\COop\Commons\Controller;
use Peach\COop\Commons\Helper;
use Peach\COop\Models\Product;

class HomeController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }
    public function index()
    {
        $name = 'Peach';
        
        $products = $this->product->all();
        // Helper::debug($products);
        $this->renderViewClient('home', [
            'name' => $name,
            'products' => $products
        ]);
    }
}