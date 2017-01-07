<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProduitCommande extends Model
{
    protected $table = 'produitcommande';

protected $fillable = array('user_id','produit_id','amount','price','total');
}
