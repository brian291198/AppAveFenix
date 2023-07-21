<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    use HasFactory;

    protected $table = 'Envío';
    protected $primaryKey = 'EnvíoID';
    public $timestamps = false;

    protected $fillable = [
        'Clave',
        'Destinatario',
        'Fecha',
        'ClienteID',
        'ComprobanteID',
        'TransporteID',
        'RutaID',
    ];
}
