<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
