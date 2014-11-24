<?php
/*
 * utility functions
 *
 * (c) Lukas Oppermann – vea.re
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @version
 */

/**
 * variable
 *
 * return variable or default
 */
function variable( &$var = null, $default = null )
{
	if( isset($default) && !isset($var) )
	{
		return $default;
	}
	return isset($var) ? $var : false;
}
