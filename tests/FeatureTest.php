<?php

use NikCani\Plog\Tests\SomeModel;
use NikCani\Plog\Tests\SomeObject;

it('can plog null', function () {
    expect(plog(null))->toBe('NULL');
});

it('can plog bool', function () {
    expect(plog(true))->toBe('true');
    expect(plog(false))->toBe('false');
});

it('can plog array', function () {
    expect(plog([42, 'foo', 'bar']))
        ->toBe("array|3|Array\n(\n    [0] => 42\n    [1] => foo\n    [2] => bar\n)\n");
});

it('can plog model', function () {
    $some_model = new SomeModel(['foo' => 'bar']);

    expect(plog($some_model))
        ->toBe("NikCani\Plog\Tests\SomeModel|array (\n  'foo' => 'bar',\n)");

    expect(plog(collect($some_model)))
        ->toBe("Illuminate\Support\Collection|1|array (\n  'foo' => 'bar',\n)");
});

it('can plog object', function () {
    $some_object = new SomeObject;

    expect(plog($some_object))
        ->toBe("object|NikCani\Plog\Tests\SomeObject|NikCani\Plog\Tests\SomeObject Object\n(\n)\n");
});

it('can dlog', function () {
    expect(dlog('foo'))->toBeNull();
});

it('can include the helpers file again without redefining the helpers', function () {
    require __DIR__.'/../src/helpers.php';

    expect(function_exists('dump_any_val_to_string'))->toBeTrue();
    expect(function_exists('plog'))->toBeTrue();
    expect(function_exists('dlog'))->toBeTrue();
});
