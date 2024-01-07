<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Carbon\Carbon;

class AnnouncementController extends Controller
{
  public function index()
	{
		$announcements = Announcement::query()
			->select(['id','user_id','title','image','published_at','views_count',])
			->where('status', 1)
			->whereDate('published_at', '<=', Carbon::now())
			->orderBy('published_at', 'DESC')
			->with('user:id,name')
			->paginate()
		;
		return response()->success('', compact('announcements'));
	}

	public function show(string $announcementId)
	{
		$announcement = Announcement::query()
			->with('user:id,name')
			->select([
				'id',
				'user_id',
				'title',
				'summary',
				'image',
				'body',
				'slug',
				'published_at',
				'views_count',
			])
			->where('status', 1)
			->whereDate('published_at', '<=', Carbon::now())
			->findOrFail($announcementId)
		;
		return response()->success('', compact('announcement'));
	}
}
