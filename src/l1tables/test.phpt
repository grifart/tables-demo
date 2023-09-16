<?php
declare(strict_types = 1);
namespace TablesDemo\l1tables;


use Ramsey\Uuid\Uuid;
use TablesDemo\Bootstrap;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';

$container = Bootstrap::boot();

/** @var \TablesDemo\l1tables\TestTable $table */
$table = $container->getByType(\TablesDemo\l1tables\TestTable::class);

$someId = Uuid::uuid4();

$newRow = $table->new(
	id: $someId
);
$newRow->modifyName("test");
$table->save($newRow);



$fetchedRow = $table->get(TestPrimaryKey::from($someId));
Assert::equal("test", $fetchedRow->getName());

