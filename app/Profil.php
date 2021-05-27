<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = "profil";
    protected $fillabel = ['umur', 'bio', 'alamat', 'user_id'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
