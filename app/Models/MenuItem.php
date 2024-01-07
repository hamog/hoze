<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class MenuItem extends Model implements Sortable
{
  use SortableTrait;
	use HasFactory;
	protected $fillable = [
		'menu_group_id',
		'title',
		'link',
		'linkable_id',
		'linkable_type',
		'order',
		'new_tab',
		'status',
	];

  public $sortable = [
    'order_column_name' => 'order',
    'sort_when_creating' => true,
  ];
  const MODELS = [
    Category::class => 'دسته بندی'
  ];
	// =============== Relations =============== \\
	public function linkable(): MorphTo
	{
		return $this->morphTo();
	}
	public function group(): BelongsTo
	{
		return $this->belongsTo(MenuGroup::class);
	}
	// ============= End Relations ============= \\
  public static function getAllCategories()
  {
    return Category::query()->where('type','=', 'news')->select(['id', 'name'])->get();
  }
  public function shamsiCreatedAt()
  {
    return app('customFunction')->gregorianToShamsi($this->attributes['created_at']);
  }
}
