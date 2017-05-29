<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
	use Notifiable;
	
	protected $table = 'reservacion';
    protected $fillable = [
        'id', 'horainicio', 'horafin', 'npersonas', 'mesa_id', 'empleado_id'
    ];
}
