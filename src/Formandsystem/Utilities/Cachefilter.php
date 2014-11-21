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
	public function fetch( $route, $request )
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
	public function put( $route, $request, $response )
	{
		$key = $this->makeCacheKey($request->url());
		if( ! Cache::has($key) ) {
			Cache::forever($key, $response->getContent());

			$keys = Cache::get('cache.views');
			$keys[] = $key;
			Cache::forever('cache.views', $keys);

		}

	}


	protected function makeCacheKey( $url )
	{
		return 'route_'.Str::slug($url);
	}

	public function clear( )
	{
		foreach(Cache::get('cache.views', []) as $id => $key)
		{
			Cache::forget($key);
		}
		Cache::forget('cache.views');
	}

}
