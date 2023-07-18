<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juridico extends Model
{
    use HasFactory;

    protected $table = 'Jurídico';
    protected $primaryKey = 'JurídicoID';
    public $timestamps = false;

    protected $fillable = [
        'Contacto',
        'Razonsocial',
        'RUC',
    ];
}
