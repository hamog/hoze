<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RegisterButton extends Component
{
	public $title;
	public $label;
	public $type;

	public function __construct(String $title, String $label, String $type = "link")
	{
		$this->title = $title;
		$this->label = $label;
		$this->type = $type;
	}

	/**
	 * Get the view / contents that represent the component.
	 */
	public function render(): View|Closure|string
	{
		return view('components.register-button');
	}
}
