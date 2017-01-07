<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
	protected $table = 'produits';
	protected $fillable = [
        'title',
        'description',
        'image',
        'type',
        'user_id'
    ];
	public function user() 
	{
		return $this->belongsTo('App\User');
	}
    
}
