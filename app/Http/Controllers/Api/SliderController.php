<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Slider;

class SliderController extends Controller
{
	public function index()
	{
		$sliders = Slider::query()
			->select(['id', 'title', 'link', 'image', 'summary'])
			->where('status', 1)
			->orderBy('id', 'DESC')
			->get();

		return response()->success('', compact('sliders'));
	}

  public function getBanners()
  {
    $sliders = Slider::query()
      ->select(['id', 'title', 'link', 'image', 'summary'])
      ->where('status', 1)
      ->orderBy('id', 'DESC')
      ->take(3)
      ->get();

    return response()->success('', compact('sliders'));
  }
}
