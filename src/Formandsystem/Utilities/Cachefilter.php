<?php namespace Formandsystem\Utilities;
/*
 * Cachefilter
 *
 * (c) Lukas Oppermann – vea.re
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @version
 */

use Illumiate\Routing\Route;
use Illumiate\Http\Request;
use Illumiate\Http\Response;
use Str;
use Cache;

class Cachefilter {
	/**
	 * fetch
	 *
	 * return cached data
	 *
	 * @access	public
	 */
	public function fetch(  )
	{
		$key = $this->makeCacheKey($request->url());
		
		if( Cache::has($key) ) return Cache::get($key);
		
	}
	/**
	 * put
	 *
	 * save to cache
	 *
	 * @access	public
	 */
	public function fetch(  )
	{
		$key = $this->makeCacheKey($request->url());
		
		if( ! Cache::has($key) ) Cache::put($key, $response->getContent(),60);
		
	}
	
	
	protected function makeCacheKey( $url )
	{
		Return 'route_'.Str::slug($url);
	}
	
}