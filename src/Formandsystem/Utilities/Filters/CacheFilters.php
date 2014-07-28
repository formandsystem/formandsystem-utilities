<?
Route::filter('cache.fetch','\Formandsystem\Utilities\CacheFilter@fetch');
Route::filter('cache.put','\Formandsystem\Utilities\CacheFilter@put');