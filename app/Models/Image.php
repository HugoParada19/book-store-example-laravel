<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
	public $timestamps = false;

	public function imagering()
	{
		return $this->morphTo();
	}
}
