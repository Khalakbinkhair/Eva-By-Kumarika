<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
	function product() {
        return $this->belongsTo('App\Product','product_id');
    }
}
