<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kupovina extends Model
{
    protected $fillable=[
        'ime', 'prezime', 'Torbica', 'email'
    ];
}
