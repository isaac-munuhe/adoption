<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $fillable = ['fname','lname','dob','gender','guardian','image','county','status'];

    public function adoptee(){
        
        return $this->belongsTo('App\Adoptee');
    }
    public function user(){
        
        return $this->belongsTo('App\User');
    }
}
