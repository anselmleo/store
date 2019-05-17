<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function dump($function = 'var_export', $json_decode = true) {
        $content = $this->response->getContent();
        if ($json_decode) {
            $content = json_decode($content, true);
        }
        // ❤ ✓ ☀ ★ ☆ ☂ ♞ ☯ ☭ € ☎ ∞ ❄ ♫ ₽ ☼
        $seperator = '❤ ❤ ❤ ❤ ❤ ❤ ❤ ❤ ❤ ❤ ❤ ❤ ❤ ❤ ❤ ❤ ❤ ❤ ❤ ❤ ❤ ❤ ❤ ❤';
        echo PHP_EOL . $seperator . PHP_EOL;
        $function($content);
        echo $seperator . PHP_EOL;
        return $this;
    }
}
