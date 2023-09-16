<?php
declare(strict_types = 1);
namespace TablesDemo\l2tables;

use Grifart\Tables\PrimaryKey;
use Ramsey\Uuid\Uuid;
use TablesDemo\Bootstrap;
use Tracy\Debugger;

require __DIR__ . '/../bootstrap.php';

$container = Bootstrap::boot();

$someId = Uuid::uuid4();

/** @var AdvancedTableTable $table */
$table = $container->getByType(AdvancedTableTable::class);

$row = $table->new($someId, "test", ['1', 'test2']);
$table->save($row);

$fetched = $table->get(AdvancedTablePrimaryKey::from($someId));
Debugger::dump($fetched->getListoftags());


