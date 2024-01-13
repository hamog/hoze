<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Link extends Model
{
	use HasFactory;
	protected $fillable = [
		"image",
		"link",
		"title",
		"subtitle",
		"status"
	];

	public function shamsiCreatedAt()
	{
		return app("customFunction")->gregorianToShamsi($this->attributes["created_at"]);
	}
	public function getImage()
	{
		return Storage::disk('public')->url($this->attributes['image']);
	}
}
