<?php

declare(strict_types=1);

namespace App\Router;


use Nette\Application\Routers\RouteList;
use Nette\Routing\Router;
use Nette\StaticClass;

final class RouterFactory
{
	use StaticClass;


	/**
	 * @return RouteList
	 */
	public static function createRouter(): RouteList
	{
		$router = new RouteList;

		$router[] = self::createFrontRouter();

		return $router;
	}


	/**
	 * @return RouteList
	 */
	private static function createFrontRouter(): RouteList
	{
		$router = new RouteList('Front');

		$router->addRoute('i', 'Homepage:default', Router::ONE_WAY);
		$router->addRoute('index.html', 'Homepage:default', Router::ONE_WAY);
		$router->addRoute('download.html', 'Homepage:download', Router::ONE_WAY);
		$router->addRoute('video.html', 'Homepage:video', Router::ONE_WAY);
		$router->addRoute('wallpapers.html', 'Homepage:wallpapers', Router::ONE_WAY);
		$router->addRoute('download', 'Homepage:download');
		$router->addRoute('video', 'Homepage:video');
		$router->addRoute('wallpapers-gallery', 'Homepage:wallpapers');
		$router->addRoute('<presenter>/<action>', 'Homepage:default');

		return $router;
	}
}
