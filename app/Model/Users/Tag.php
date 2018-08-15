<?php

namespace App\Model\Users;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $hidden = [
		'created_at', 'updated_at',
	];
	
	protected $table = 'tags';

	protected $fillable = ['name', 'slug', 'created_at', 'updated_at'];
}
