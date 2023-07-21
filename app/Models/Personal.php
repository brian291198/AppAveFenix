<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $table='personal';
    protected $primaryKey='id_personal';
    public $timestamps=false;
    protected  $fillable=['dni','nombre','apellidos','edad','genero','estado_civil','direccion','telefono','email','control','fecha_nac','num_licencia','tip_licencia'];

    
    public function bus() 
    {
          return $this->HasMany(Bus::class,'idbus','idbus');
    }

}
