<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chariot extends Model
{
	protected $table = 'chariots';

	protected $fillable = array('user_id','produit_id','montant','total');

	public function Books(){

        return $this->belongsTo('App\Produit','produit_id');

    }
   
}
