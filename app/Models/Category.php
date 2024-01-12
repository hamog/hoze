<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
	use HasFactory;
	protected $fillable = ["name", "slug", "type", "status"];

	// =============== Relations =============== \\
	public function news(): HasMany
	{
		return $this->hasMany(News::class);
	}

	public function articles(): HasMany
	{
		return $this->hasMany(Article::class);
	}
	// ============= End Relations ============= \\

	public function createdAt()
	{
		return app("customFunction")->gregorianToShamsi($this->attributes["created_at"]);
	}

	public function getType()
	{
		$type = $this->attributes["type"];
		if ($type == 'news') return 'خبر';
		if ($type == 'article') return 'مقاله';
	}
}
