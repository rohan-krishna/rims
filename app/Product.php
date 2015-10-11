<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Product extends Model
{
	//Date Format
	protected $dates = ['delivered_date'];
    //Unguard Mass Assignment
    protected $fillable = [
    	'name',
    	'descriptions',
    	'image_name',
    	'is_locked',
    	'quantity',
    	'gold_smith',
    	'delivered_date'
    ];

    public function setDeliveredDateAttribute($date)
    {
    	$this->attributes['delivered_date'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    /**
     * @param $query
     */
    public function scopeDelivered($query) {
		$query->where('delivered_at','<=',Carbon::now());
	}
}
