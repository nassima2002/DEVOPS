<?php 
namespace App\Tests\Models; 

use PHPUnit\Framework\TestCase; 
use App\Models\ProduitModel; 

class ProduitModelTest extends TestCase 
{
    public function testFindAllProduits() 
    { 
        $model = new ProduitModel(); 
        $produits = $model->findAll(); 
        $this->assertIsArray($produits, "findAll retourne un tableau !");
    }

    public function testInsertProduit() 
    {
        $model = new ProduitModel(); 
        $data = [
            'nom' => 'Tapis Berbère',
            'description' => 'Tapis traditionnel marocain',
            'prix' => 199.99
        ]; 
        $id = $model->insert($data); 
        $this->assertGreaterThan(0, $id, "ID produit inséré > 0");
    }
}
?>
