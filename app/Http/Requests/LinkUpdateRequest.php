<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LinkUpdateRequest extends FormRequest
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
			'subtitle' => ['required', 'string', 'max:100'],
			'link' => ['required', 'string', 'url', 'max:199'],
			'image' => ['nullable', 'image', 'mimes:png,jpg'],
			'status' => ['required', 'in:0,1']
		];
	}
}
