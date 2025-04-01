<?php

declare(strict_types=1);

use App\StringUtils;

test('reverseString reverses non-numeric strings correctly', function () {
    expect(StringUtils::reverseString('hello'))->toBe('olleh');
    expect(StringUtils::reverseString('world'))->toBe('dlrow');
    expect(StringUtils::reverseString('TUES'))->toBe('SEUT');
});

test('reverseString returns ERROR for numeric strings', function () {
    expect(StringUtils::reverseString('123'))->toBe('ERROR');
    expect(StringUtils::reverseString('42'))->toBe('ERROR');
    expect(StringUtils::reverseString('3.14'))->toBe('ERROR');
});

test('reverseString handles empty string', function () {
    expect(StringUtils::reverseString(''))->toBe('');
});

test('reverseString handles special characters', function () {
    expect(StringUtils::reverseString('!@#$%'))->toBe('%$#@!');
});
