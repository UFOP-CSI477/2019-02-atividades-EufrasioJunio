<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function requets()
    {
        return $this->hasMany('App\Requet');
    }
    protected $fillable = [
        'name', 'price',
    ];
}
