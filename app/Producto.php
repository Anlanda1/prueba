<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	use Notifiable;
	
	protected $table = 'producto';
    protected $fillable = [
        'nombre', 'descripcion', 'precio', 'tipo'
    ];
}
