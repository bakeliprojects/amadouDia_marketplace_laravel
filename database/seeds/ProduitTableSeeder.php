<?php

use Illuminate\Database\Seeder;
use App\Produit;
class ProduitTableSeeder extends Seeder
{
   public function run()
  {
  DB::table('produits')->delete();

  Produit::create(array(
    'libelle'=>'Requiem',
    'description'=> 'Nothing',
    //'prix'=>'13.40',
    'pic'=>'requiem.jpg',
    'user_id'=>9
   ));
 Produit::create(array(
    'libelle'=>'Requiem',
    'description'=> 'Nothing',
   // 'prix'=>'13.40',
    'pic'=>'requiem.jpg',
    'user_id'=>10
   ));

  }
}
