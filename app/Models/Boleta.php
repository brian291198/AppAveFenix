<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boleta extends Model
{
    use HasFactory;

    protected $table = 'Boleta';
    protected $primaryKey = 'BoletaID';
    public $timestamps = false;

    protected $fillable = [
        'DNI',
    ];
}
