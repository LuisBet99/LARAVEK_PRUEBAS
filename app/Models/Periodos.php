<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodos extends Model
{
    use HasFactory;
    protected $table = 'periodos';
    protected $fillable = ['nombre_periodo'];

    public $timestamps = false;
}
