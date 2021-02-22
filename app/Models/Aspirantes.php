<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirantes extends Model
{
    use HasFactory;

      //protected $table = 'aspirantes';
      protected $fillable = ['nombre', 'email', 'edad'];//SE USA PARA DECIRLE QUE CAMPOS PODEMOS MANIPULAR
      //protected $guarded = ['id'];
    
}