<?php
namespace App\Controllers;
use App\Models\ProduitModel;

class ProduitController extends BaseController
{
    public function index()
    {
        $model = new ProduitModel();
        $data['produits'] = $model->findAll();
        return view('produit_list', $data);
    }

    public function create()
    {
        return view('create_produit');
    }
}
