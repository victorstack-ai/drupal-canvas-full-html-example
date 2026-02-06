<?php

declare(strict_types=1);

namespace CanvasFullHtmlExample\Tests;

use CanvasFullHtmlExample\ConfigPaths;
use PHPUnit\Framework\TestCase;

final class ConfigFilesTest extends TestCase
{
    public function testInstallConfigMatchesExampleConfig(): void
    {
        $pairs = [
            'filter.format.full_html.yml',
            'editor.editor.full_html.yml',
        ];

        foreach ($pairs as $file) {
            $install = ConfigPaths::installPath($file);
            $example = ConfigPaths::examplePath($file);

            $this->assertFileExists($install);
            $this->assertFileExists($example);
            $this->assertSame(file_get_contents($install), file_get_contents($example));
        }
    }

    public function testFullHtmlFormatIsPresent(): void
    {
        $contents = file_get_contents(ConfigPaths::installPath('filter.format.full_html.yml'));

        $this->assertStringContainsString('format: full_html', $contents);
        $this->assertStringContainsString('filters:', $contents);
    }
}
