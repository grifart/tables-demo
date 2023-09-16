<?php
declare(strict_types = 1);
namespace TablesDemo\l2tables;

use Grifart\Tables\Scaffolding\TablesDefinitions;
use TablesDemo\Bootstrap;

// create a DI container, the same way as you do in your application's bootstrap.php, e.g.
$container = Bootstrap::boot();

// grab the definitions factory from the container
return $container->getByType(TablesDefinitions::class)->for(
	'public', // table schema
	'advanced', // table name
	AdvancedTableRow::class,
	AdvancedTableChangeSet::class,
	AdvancedTableTable::class,
	AdvancedTablePrimaryKey::class,
);
