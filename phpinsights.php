<?php

use NunoMaduro\PhpInsights\Domain\Insights\Architecture\ForbiddenTraits;
use NunoMaduro\PhpInsights\Domain\Insights\Architecture\TooManyPublicMethods;
use NunoMaduro\PhpInsights\Domain\Insights\Architecture\TooManyClasses;
use NunoMaduro\PhpInsights\Domain\Insights\Architecture\TooManyDependencies;

return [

    'preset' => 'default',

    'ide' => null,

    'remove' => [],

    'add' => [
        'NunoMaduro\\PhpInsights\\Domain\\Insights\\Architecture\\ForbiddenTraits',
        'NunoMaduro\\PhpInsights\\Domain\\Insights\\Architecture\\TooManyPublicMethods',
        'NunoMaduro\\PhpInsights\\Domain\\Insights\\Architecture\\TooManyClasses',
        'NunoMaduro\\PhpInsights\\Domain\\Insights\\Architecture\\TooManyDependencies',
    ],

    'requirements' => [
        'min-quality' => 0,
        'min-complexity' => 0,
        'min-architecture' => 0,
        'min-style' => 0,
    ],

    'threads' => 6
];
