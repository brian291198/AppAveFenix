<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamo extends Model
{
    use HasFactory;

    protected $table = 'Reclamo';
    protected $primaryKey = 'ReclamoID';
    public $timestamps = false;

    protected $fillable = [
        'Codigo',
        'Descripcion',
        'Estado',
        'ClienteID',
    ];
}
