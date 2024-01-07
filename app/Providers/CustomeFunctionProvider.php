<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Morilog\Jalali\Jalalian;

class CustomeFunctionProvider extends ServiceProvider
{
	/**
	 * Register services.
	 */
	public function register(): void
	{
		app()->bind("customFunction", function() {
			return new class {
				public function gregorianToShamsi($gregorianDate) {
          $date = date("Y-m-d", strtotime($gregorianDate));
          $date = Jalalian::fromDateTime($gregorianDate);
          $year = $date->getYear();
          $day = $date->getDay();
          $month = $date->getMonth();
          $shamsiDate = "$year/$month/$day";
          return $shamsiDate;
        }
			};
		});
	}

	/**
	 * Bootstrap services.
	 */
	public function boot(): void
	{
		//
	}
}
