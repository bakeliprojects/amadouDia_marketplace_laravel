<?php

use Illuminate\Database\Seeder;
use App\Produit;
class DatabaseSeeder extends Seeder
{
    public function run()
  {
    Eloquent::unguard();

   
        $this->call('ProduitTableSeeder');
    $this->command->info('Produit table seeded!');
  }
}
