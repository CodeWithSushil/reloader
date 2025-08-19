<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in(__DIR__ . '/src')
    ->in(__DIR__ . '/tests')
    ->name('*.php');

return (new Config())
    ->setRules([
        '@PSR12' => true,
        'strict_param' => true,
        'array_syntax' => ['syntax' => 'short'],
        'no_unused_imports' => true,
        'no_trailing_whitespace_in_string' => true,
        'single_quote' => true,
        'ordered_imports' => ['sort_algorithm' => 'alpha']
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder)
    ->setUsingCache(true);
