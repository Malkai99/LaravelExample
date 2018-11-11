<?php

namespace Larav;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

	// public function roles()
	// {
	// 	return $this->belongs
	// }

	protected $fillable = ['nombre', 'apellido', 'email', 'slug'];

    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
