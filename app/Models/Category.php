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
	public function news() :HasMany
	{
		return $this->hasMany(News::class);
	}
	// ============= End Relations ============= \\

	public function createdAt()
	{
		return app("customFunction")->gregorianToShamsi($this->attributes["created_at"]);
	}
}


