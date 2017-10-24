<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $fillable = ['nom_jour', 'nb_jour', 'mois', 'year'];
}
