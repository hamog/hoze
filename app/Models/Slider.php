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

  protected $appends = [
    'image_url'
  ];

  protected function imageUrl(): Attribute
  {
    return Attribute::make(
      get: fn () => $this->getImage()
    );
  }

	public function shamsiCreatedAt()
	{
		return app("customFunction")->gregorianToShamsi($this->attributes["created_at"]);
	}
	public function getImage(): string
  {
		return Storage::disk('public')->url($this->attributes['image']);
	}
	public function deleteImage()
	{
		return Storage::delete($this->attributes["image"]);
	}
}
