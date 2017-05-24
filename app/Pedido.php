<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
	use Notifiable;
	
	protected $table = 'pedido';
    protected $fillable = [
        'nombre', 'cantidad', 'precio'
    ];
}
