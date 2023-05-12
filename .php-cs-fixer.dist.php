<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude(['storage', 'resources', 'bootstrap'])
    ->in(__DIR__);

$config = new PhpCsFixer\Config();
return $config->setRules([
    '@PSR12' => true,
    'array_syntax' => ['syntax' => 'short'],
])->setFinder($finder);
