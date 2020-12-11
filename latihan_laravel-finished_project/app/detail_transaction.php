<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_transaction extends Model
{
    //
    //Relationship with detail
    public function product(){
        return $this->belongsTo('App\product','idProduct','id');
    }

    protected $fillable = ['idTransaction', 'idProduct', 'qty'];
    public $timestamps = false;
}
