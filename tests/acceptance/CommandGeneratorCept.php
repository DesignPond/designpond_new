<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Generate boilerplate files for cms ');

$I->runShellCommand('php artisan boilerplate:generate Acme/Bar/Foo --properties="bar,baz" --base="tests/temp"');

$I->seeInShellOutput('All done!');

$I->openFile("tests/temp/Acme/Bar/Foo/Repo/FooEloquent.php");
$I->seeFileContentsEqual(file_get_contents('tests/acceptance/stubs/FooEloquent.stub'));

$I->cleanDir('tests/temp/Bar/Foo/Repo');
$I->cleanDir('tests/temp/Bar/Foo/Entities');