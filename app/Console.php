<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
    protected $table = 'console';

    public $timestamps = true;

    protected $guarded = ['imei'];


    public function button()
    {
        return $this->HasMany('App\Button', 'button_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
