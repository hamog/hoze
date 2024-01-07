<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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

  protected function imageUrl(): Attribute
  {
    return Attribute::make(
      get: fn (string $value) => Storage::url($value)
    );
  }

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
