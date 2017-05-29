<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
	use Notifiable;
	
	protected $table = 'mesa';
    protected $fillable = [
        'id', 'estado', 'ID usuario'
    ];
}
