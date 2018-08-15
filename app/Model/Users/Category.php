<?php

namespace App\Model\Users;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $hidden = [
		'created_at', 'updated_at',
	];
	
	protected $table = 'categories';

	protected $fillable = ['name', 'slug', 'created_at', 'updated_at'];
}
