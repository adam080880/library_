<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function writer()
    {
        return $this->belongsTo('App\Writer');
    }

    public function publisher()
    {
        return $this->belongsTo('App\Publisher');
    }

    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }
}
