<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soldado extends Model
{
    protected $rellenable = ['nombre', 'edad'];
    public function images()
    {
        return $this->morphMany(images::class, 'imageable');
    }
}
