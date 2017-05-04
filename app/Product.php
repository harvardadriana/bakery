<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * relashionship between product and order
     */
    public function orders() {
        return $this->belongsToMany('App\Order')->withTimestamps();
    }

}
