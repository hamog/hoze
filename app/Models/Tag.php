<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
	use HasFactory;
	protected $fillable = ["name"];

	// =============== Relations =============== \\
	public function news(): BelongsToMany
	{
		return $this->belongsToMany(Tag::class);
	}
	// ============= End Relations ============= \\

  public function shamsiDate($timestamp)
  {
    return app("customFunction")->gregorianToShamsi($timestamp);
  }
	public function shamsiCreatedAt()
	{
    return app("customFunction")->gregorianToShamsi($this->attributes["created_at"]); 
	}
}
