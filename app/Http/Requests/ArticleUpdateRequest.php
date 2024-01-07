<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleUpdateRequest extends FormRequest
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
			'title' => ['required', 'string', 'max:199'],
			'resource' => ['required', 'string', 'max:255'],
			'category_id' => ['required', 'exists:categories,id'],
			'image' => ['nullable', 'image', 'mimes:png,jpg'],
			'slug' => ['required', 'string', 'max:255'],
			'status' => ['required', 'in:0,1'],
			'summary' => ['required', 'string'],
			'body' => ['required', 'string']
		];
	}
}
