<?php
namespace Zmcms\WebsiteDownloads\Backend\Middleware;
use Closure;use Session;use URL;class ZmcmsWebsiteDownloads
{
	public function handle($request, Closure $next){
		return $next($request);
	}
}
