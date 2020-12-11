<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    //Relationship with user
    public function user(){
        return $this->hasOne('App\User','id','idStaff');
    }

    //Relationship with detail
    public function detail(){
        return $this->hasMany('App\detail_transaction','idTransaction','id');
    }
    protected $fillable = ['idStaff', 'date'];
    public $timestamps = false;
}
