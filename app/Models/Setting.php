<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'name',
        'code',
        'value'
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }

}
