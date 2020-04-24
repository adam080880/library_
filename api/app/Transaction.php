<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function admin()
    {
        return $this->belongsTo('App\User', 'admin_id', 'id');
    }

    public function book()
    {
        return $this->belongsTo('App\Book');
    }
}
