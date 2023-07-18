<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Natural extends Model
{
    use HasFactory;

    protected $table = 'Natural';
    protected $primaryKey = 'NaturalID';
    public $timestamps = false;

    protected $fillable = [
        'DNI',
        'Apellidos',
        'Nombres',
        'Telefono',
        'Fechanac',
    ];
}
