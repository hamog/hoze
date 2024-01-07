<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MenuGroup extends Model
{
  use HasFactory;
  protected $fillable = [
		'label',
		'name'
	];

  // =============== Relations =============== \\
	public function items(): HasMany
	{
		return $this->hasMany(MenuItem::class);
	}
	// ============= End Relations ============= \\

	public function createdAt()
	{
		return app("customFunction")->gregorianToShamsi($this->attributes["created_at"]);
	}
}
