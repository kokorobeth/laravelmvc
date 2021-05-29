<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peran extends Model
{
    protected $table = "peran";
    protected $fillable = ['cast_id', 'film_id', 'nama'];
    // protected $guarded = [];
}
