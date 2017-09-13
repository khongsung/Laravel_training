<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends BaseAdminController
{
    protected $repository;

    public function __construct(ProductRepository $product)
    {
        $this->repository = $product;
    }

    public function index()
    {
        $this->repository->all();
        $this->repository->find();
        
        return 'Index Product';
    }

    public function create()
    {
        return 'Create Product';
    }

    public function store()
    {
        return 'Store Product';
    }
}
