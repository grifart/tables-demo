<?php
declare(strict_types = 1);
namespace TablesDemo\l0generator;

use function Grifart\ClassScaffolder\Definition\definitionOf;
use Grifart\ClassScaffolder\Definition\Types;
use Grifart\ClassScaffolder\Capabilities;

return definitionOf(ArticleDTO::class, withFields: [
	'id' => 'int',
	'title' => 'string',
	'content' => 'string',
	'tags' => Types\listOf('string'),
	// https://gitlab.grifart.cz/grifart/scaffolder/-/blob/master/readme.md#fields-and-types
])
	->withField('archivedAt', Types\nullable(\DateTime::class))
	->with(
		Capabilities\constructorWithPromotedProperties(),
		Capabilities\getters(),
		// https://gitlab.grifart.cz/grifart/scaffolder/-/blob/master/readme.md#capabilities
	);




