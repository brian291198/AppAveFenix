<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    use HasFactory;

    protected $table = 'Comprobante';
    protected $primaryKey = 'ComprobanteID';
    public $timestamps = false;

    protected $fillable = [
        'TarifaID',
        'PromocionID',
        'Numero',
        'Monto',
        'Fecha',
        'Observaciones',
    ];
}
