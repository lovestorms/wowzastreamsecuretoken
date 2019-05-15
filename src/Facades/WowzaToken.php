<?php

namespace Lovestorms\Wowzastreamsecuretoken\Facades;

use Illuminate\Support\Facades\Facade;

class WowzaToken extends Facade
{
	
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'wowzatoken';
	}
}