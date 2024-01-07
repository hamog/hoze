<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
	use HasFactory;
	protected $fillable = [
		"image",
		"link",
		"title",
		"summary",
		"status",
	];

	public function shamsiCreatedAt()
	{
		return app("customFunction")->gregorianToShamsi($this->attributes["created_at"]);
	}
	public function getImage()
	{
		return Storage::url($this->attributes['image']);
	}
	public function deleteImage()
	{
		return Storage::delete($this->attributes["image"]);
	}
}
