<?php

namespace TablesDemo;

use Nette\Configurator;
use Nette\DI\Container;
use Nette\StaticClass;

require_once __DIR__ . '/../vendor/autoload.php';

final class Bootstrap
{
	use StaticClass;

	public static function boot(): Container
	{
		$configurator = new Configurator();

		// disable extension which we do not want to use now
		unset($configurator->defaultExtensions['security']); // because we would need to provide IUserStorage for \Nette\User which we do not want to mess with now

		$configurator->addParameters([
			'rootDir' => __DIR__,
			'logDir' => $logDir = __DIR__ . '/../log',
			'tempDir' => $tempDir = __DIR__ . '/../temp',
		]);

		$configurator->setTempDirectory($tempDir);
		$configurator->setDebugMode(true);
		$configurator->enableTracy($logDir);

		$configurator->addConfig(__DIR__ . '/container.neon');

		return $configurator->createContainer();
	}
}
