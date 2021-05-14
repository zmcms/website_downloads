<?php
namespace Zmcms\WebsiteDownloads;
use Illuminate\Support\ServiceProvider;
class ZmcmsWebsiteDownloadsServiceProvider extends ServiceProvider{

	public function register(){
		$this->app->make('Zmcms\WebsiteDownloads\Backend\Controllers\ZmcmsWebsiteDownloadsController');
		$this->app->make('Zmcms\WebsiteDownloads\Frontend\Controllers\ZmcmsWebsiteDownloadsController');
		require_once(__DIR__.'/helpers.php');
	}

	public function boot(){
		$this->loadMigrationsFrom(__DIR__.'/migrations');
		$this->publishes([
			__DIR__.'/config' => base_path('config/zmcms/website_downloads'),
			__DIR__.'/backend/css' => base_path('public/themes/zmcms/backend/css/'),
			__DIR__.'/backend/js' => base_path('public/themes/zmcms/backend/js/'),
			__DIR__.'/backend/views' => base_path('resources/views/themes/zmcms/backend'),
			__DIR__.'/frontend/css' => base_path('public/themes/zmcms/frontend/css/'),
			__DIR__.'/frontend/js' => base_path('public/themes/zmcms/frontend/js/'),
			__DIR__.'/frontend/views' => base_path('resources/views/themes/zmcms/frontend'),
		]);
	}

}
