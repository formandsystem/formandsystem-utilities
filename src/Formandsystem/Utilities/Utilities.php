<?php namespace Formandsystem\Utilities;
/*
 * utilities
 *
 * (c) Lukas Oppermann – vea.re
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @version
 */

use Log;
use App;

class Utilities {
	/**
	 * variable
	 *
	 * return variable or default
	 *
	 * @access	public
	 */
	public function variable( &$var = null, $default = null )
	{
		if( isset($var) )
		{
			return $var;
		}
		else if( isset($default) )
		{
			return $default;
		}
		return false;
	}
}