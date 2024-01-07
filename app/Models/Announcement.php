<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;
use \Illuminate\Support\Str;

class Announcement extends Model
{
	use HasFactory;
	protected $fillable = [
		"user_id",
		"title",
		"summary",
		"image",
		"body",
		"slug",
		"published_at",
		"views_count",
		"status",
	];

		// =============== Relations =============== \\
		public function user(): BelongsTo
		{
			return $this->belongsTo(User::class);
		}
		// ============= End Relations ============= \\

		public function getImage()
		{
			return Storage::disk('public')->url($this->attributes["image"]);
		}
		public function deleteImage()
		{
			return Storage::delete($this->attributes["image"]);
		}
		public function publishedAt()
		{
			return Carbon::parse($this->attributes["published_at"])->format("Y-m-d");
		}
		public function shamsiPublishedAt()
		{
			return app("customFunction")->gregorianToShamsi($this->attributes["published_at"]);
		}
		public function limitedTitle()
		{
			return Str::limit($this->attributes["title"], 20, '...');
		}
}
