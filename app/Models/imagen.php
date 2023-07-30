<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imagen extends Model
{
    protected $rellenable = ['url'];
    public function imageable()
    {
        return $this->morphTo();
    }
}
