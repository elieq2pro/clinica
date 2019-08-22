<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	protected $fillable = [
        'dni', 'gender', 'birthdate', 'marital_status', 'insurance_company'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
