<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adoptee extends Model
{
    protected $fillable = [
        'user_id',
        'child_id',
    	'name',
    	'idno',
    	'age',
    	'marital',
        'location',
    	'reason',
    	'address',
    	'passport',
    	'good_conduct',
    	'bank',
    	'marriage_cert',
    	'is_approved',
    ];

    public function child(){
        
        return $this->hasMany('App\Children');
    }
}

