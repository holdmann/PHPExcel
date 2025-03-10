<?php
use Rector\Config\RectorConfig;

use Rector\Set\ValueObject\LevelSetList;

$isParallel = false;

return static function (RectorConfig $rectorConfig) use ($isParallel): void {

    $rectorConfig->parallel(120, 8, 4);

    if (!$isParallel)
    {
        $rectorConfig->disableParallel();
    }

    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_80,
    ]);

    $rectorConfig->paths([
        __DIR__ . '/../Classes',
    ]);

    $rectorConfig->skip([]);
};