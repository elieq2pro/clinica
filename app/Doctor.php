<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'dni', 'cmp'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
