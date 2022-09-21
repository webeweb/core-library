<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Image\Tests\Fixtures;

/**
 * Test fixtures.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Image\Tests\Fixtures
 */
class TestFixtures {

    /**
     * Get the images.
     *
     * @return string[] Returns the images.
     */
    public static function getImages(): array {

        return [
            realpath(__DIR__ . "/TestImage_1920x1037.jpg"),
            realpath(__DIR__ . "/TestImage_1920x1037.png"),
            realpath(__DIR__ . "/TestImage_1920x1920.png"),
            realpath(__DIR__ . "/TestImage_1920x3554.png"),
            realpath(__DIR__ . "/TestImage_640x512.svg"),
        ];
    }
}
