<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Setting extends Model
{
  use HasFactory;

  protected $fillable = [
    'group',
    'label',
    'name',
    'type',
    'value',
  ];
  const GROUP = [
    'general' => 'عمومی',
    'social' => 'شبکه های اجتماعی'
  ];

  public function value(): Attribute
  {
    return Attribute::make(
      get: fn(string|null $value) => ($this->attributes['type'] == 'image' && !is_null($value)) ?
        Storage::disk('public')->url($value) : $value,
    );
  }
}
