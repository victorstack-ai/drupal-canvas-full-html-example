<?php

declare(strict_types=1);

namespace CanvasFullHtmlExample;

final class ConfigPaths
{
    public static function rootDir(): string
    {
        return dirname(__DIR__);
    }

    public static function installPath(string $file): string
    {
        return self::rootDir() . '/config/install/' . $file;
    }

    public static function examplePath(string $file): string
    {
        return self::rootDir() . '/config/example/' . $file;
    }
}
