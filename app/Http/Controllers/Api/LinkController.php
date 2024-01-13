<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Link;

class LinkController extends Controller
{
	public function index()
	{
		$links = Link::query()
			->select(['id', 'title', 'subtitle', 'link', 'image', 'description'])
			->where('status', 1)
			->orderBy('id', 'DESC')
			->get()
		;
		return response()->success('', compact('links'));
	}

  public function getRecent()
  {
    $links = Link::query()
      ->select(['id', 'title', 'subtitle', 'link', 'image', 'description'])
      ->where('status', 1)
      ->orderBy('id', 'DESC')
      ->take(6)
      ->get();

    return response()->success('', compact('links'));
  }
}
