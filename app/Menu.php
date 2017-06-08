<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	use Notifiable;
	
	protected $table = 'menu';
    protected $fillable = [
        'nombre', 'tipo', 'descripcion', 'precio'
    ];
}
