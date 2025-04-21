<?php
namespace App\Models;
use CodeIgniter\Model;

class ProduitModel extends Model
{
    protected $table = 'produits';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nom', 'description', 'prix'];
}
