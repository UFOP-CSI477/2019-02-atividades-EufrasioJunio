<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requet extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
    protected $fillable = [
        'subject_id', 'user_id', 'date', "description"
    ];
}
