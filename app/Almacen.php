<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
	use Notifiable;
	
	protected $table = 'almacen';
    protected $fillable = [
        'nombre', 'cantidad', 'precio'
    ];
}
