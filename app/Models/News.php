<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
	use HasFactory;
	protected $fillable = [
		"user_id",
		"category_id",
		"title",
		"subtitle",
		"summary",
		"image",
		"body",
		"slug",
		"resource_url",
		"published_at",
		"views_count",
		"featured",
		"status"
	];

	// =============== Relations =============== \\
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
	public function category(): BelongsTo
	{
		return $this->belongsTo(Category::class);
	}
	public function tags(): BelongsToMany
	{
		return $this->belongsToMany(Tag::class);
	}
	// ============= End Relations ============= \\

	public function shamsiDate($timestamp)
	{
		return app("customFunction")->gregorianToShamsi($timestamp);
	}
	public function publishedAt()
	{
		return Carbon::parse($this->attributes["published_at"])->format("Y-m-d");
	}
	public function attachTags(array $tags, bool $onUpdate = false)
	{
		$tagIds = [];
		foreach ($tags as $tag) {
			$tag = Tag::firstOrCreate(['name' => $tag]);
			$tagIds[] = $tag->id;
		}
		$onUpdate ? $this->tags()->sync($tagIds) : $this->tags()->attach($tagIds);
	}
	public function getImage()
	{
		return Storage::url($this->attributes['image']);
	}
	public function checkSelectingTags(String $tagId) 
	{
		$exists = $this->tags()->where("tag_id", $tagId)->exists();
		if ($exists) 
			return "selected";
		else 
			return 0;
	}
}