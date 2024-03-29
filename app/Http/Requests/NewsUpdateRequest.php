<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsUpdateRequest extends FormRequest
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
			"category_id" => ["required", "exists:categories,id"],
			"title" => ["required", "string", "max:255"],
			"subtitle" => ["required", "string", "max:255"],
			"slug" => ["required"],
			"resource_url" => ["required", "string", "max:255"],
			"summary" => ["required", "string", "max:1000"],
			"body" => ["required", "string", "max:64000"],
			"published_date" => ["required", "date"],
			"image" => ["image", "mimes:png,jpg"],
      "tag" => ["nullable", "array"],
      "tag.*" => ["required", "string"]
		];
	}
}
