<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class stuses extends Model
{
    use HasFactory;

    public function student(){
        return $this->hasOne(orm::class);
    }
}
