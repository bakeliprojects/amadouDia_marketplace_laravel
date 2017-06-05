<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produit;
class Order extends Model
{
protected $table = 'orders';

protected $fillable = array('user_id','address','total');

public function orderItems()
    {
        return $this->belongsToMany('App\Produit') ->withPivot('amount','total');
    }
}
