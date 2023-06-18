<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    public function favorites()
    {
        return $this->hasMany('App\Models\Favorite', 'user');
    }

    public function profiles()
    {
        return $this->hasOne('App\Models\Profile', 'user');
    }
    public function streams()
    {
        return $this->hasMany('App\Models\Stream', 'user');
    }
    
}

?>