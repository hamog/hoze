<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MenuUpdateRequest extends FormRequest
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
			'linkable_type' => ['required'],
			'linkable_id' => ['required_if:link,null', 'not_in:none'],
			'link' => ['required_if:linkable_id,null', 'string', 'max:300'],
			'new_tab' => ['required', 'in:0,1'],
			'status' => ['required', 'in:0,1']
		];
	}
}
