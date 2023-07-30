<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
    protected $rellenable = ['nombre'];
    public function soldado()
    {
        return $this->belongsToMany(soldado::class, 'soldado_servicio', 'servicio_id', 'soldado_id');
    }
    
}
