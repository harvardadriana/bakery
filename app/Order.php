<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    /**
     * RELASHIONSHIP BETWEEN USER AND ORDERS
     */
	public function user() {
		return $this->belongsTo('App\User');
	}
}
