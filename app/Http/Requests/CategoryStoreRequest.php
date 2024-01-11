<?php

namespace App\Http\Requests;

use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryStoreRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		return [
			"name" => [
        "required",
        "min:4",
        "max:191",
        "string",
        Rule::unique('categories')->where(fn (Builder $query) => $query->where('type', 'news'))
      ],
			"type" => ["required", 'in:news,article'],
			"slug" => ["required", "min:4", "max:255", "string"],
			"status" => ["required", 'in:0,1'],
		];
	}
}
