<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
	/**
	 * The list of the inputs that are never flashed to the session on validation exceptions.
	 *
	 * @var array<int, string>
	 */
	protected $dontFlash = [
		'current_password',
		'password',
		'password_confirmation',
	];

	public function render($request, Throwable $e)
	{
		if ($request->wantsJson()) {
			if ($e instanceof ModelNotFoundException)
				return response()->error('مورد خواسته شده یافت نشد.', ['Message' => $e->getMessage()], 404);
			if ($e instanceof ValidationException)
				return response()->error('Validation errors:',  $e->errors(), 422);
		}
		return parent::render($request, $e);
	}

	/**
	 * Register the exception handling callbacks for the application.
	 */
	public function register(): void
	{
		$this->reportable(function (Throwable $e) {
			//
		});
	}
}
