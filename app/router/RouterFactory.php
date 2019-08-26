<?php

declare(strict_types=1);

namespace App\Router;


use Nette\Application\Routers\RouteList;
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

		$router->addRoute('download', 'Homepage:download');
		$router->addRoute('video', 'Homepage:video');
		$router->addRoute('wallpapers-gallery', 'Homepage:wallpapers');
		$router->addRoute('<presenter>/<action>', 'Homepage:default');

		return $router;
	}

}
