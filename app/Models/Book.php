<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
	private $timestamps = false;

	public function genre()
	{
		return $this->morphMany(Genre::class, 'genering');
	}

	public function image()
	{
		return $this->morphMany(Image::class, 'imagering');
	}
}
