<?php
declare(strict_types = 1);
namespace TablesDemo\l1tables;


use Ramsey\Uuid\Uuid;
use TablesDemo\Bootstrap;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';

$container = Bootstrap::boot();

/** @var TestTable $table */
$table = $container->getByType(TestTable::class);

$someId = Uuid::uuid4();

$newRow = $table->new($someId, 'Jan');
$table->save($newRow);



// ---

$fetched = $table->get(TestPrimaryKey::from($someId));

$edit = $table->edit($fetched);
$edit->modifyName($fetched->getName() . " 2");
$table->save($edit);




// ---

//$table->delete($fetched);


