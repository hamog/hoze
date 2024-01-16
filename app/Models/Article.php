<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
	use HasFactory;
	protected $fillable = [
		"user_id",
		"category_id",
		"title",
		"summary",
		"image",
		"body",
		"slug",
		"resource",
		"views_count",
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

	// =============== Relations =============== \\
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
	public function category(): BelongsTo
	{
		return $this->belongsTo(Category::class);
	}
	// ============= End Relations ============= \\

	public function shamsiCreatedAt()
	{
		return app("customFunction")->gregorianToShamsi($this->attributes["created_at"]);
	}
	public function getImage()
	{
		return Storage::disk('public')->url($this->attributes['image']);
	}
	public function deleteImage()
	{
		return Storage::delete($this->attributes["image"]);
	}
}
