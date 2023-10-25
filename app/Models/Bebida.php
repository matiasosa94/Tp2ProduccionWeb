<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bebida extends Model
{
    use HasFactory;

    public function marca(){
        return $this->hasOne(Marca::class,"id","marca_id");
    }

    public function tipo(){
        return $this->hasOne(Tipo::class,"id","tipo_id");
    }
}
