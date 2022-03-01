<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets\Color;

use WBW\Library\Symfony\Assets\Color\ColorHelper;
use WBW\Library\Symfony\Assets\Color\MaterialDesignColorPalette\RedColorProvider;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Color helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets\Color
 */
class ColorHelperTest extends AbstractTestCase {

    /**
     * Tests getIdentifier()
     *
     * @return void
     */
    public function testGetIdentifier(): void {

        // Set a Color provider mock.
        $colorProvider = new RedColorProvider();

        $res = implode(":", ["MaterialDesignColorPalette", "red"]);
        $this->assertEquals($res, ColorHelper::getIdentifier($colorProvider));
    }
}
