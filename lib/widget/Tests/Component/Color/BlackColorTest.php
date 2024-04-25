<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Widget\Tests\Component\Color;

use JsonSerializable;
use WBW\Library\Widget\Component\Color\BlackColor;
use WBW\Library\Widget\Component\Color\BlackColorInterface;
use WBW\Library\Widget\Component\ColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Black color test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Assets\MaterialDesignColorPalette
 */
class BlackColorTest extends AbstractTestCase {

    /**
     * Test getValues()
     *
     * @return void
     */
    public function testGetValues(): void {

        $obj = new BlackColor();

        $res = $obj->getValues();
        $this->assertCount(1, $res);

        $this->assertEquals(BlackColorInterface::BLACK_COLOR_VALUE, $res[ColorInterface::COLOR_VALUE_DEFAULT]);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new BlackColor();

        $this->assertInstanceOf(JsonSerializable::class, $obj);
        $this->assertInstanceOf(ColorInterface::class, $obj);
        $this->assertInstanceOf(BlackColorInterface::class, $obj);

        $this->assertEquals(BlackColorInterface::BLACK_COLOR_NAME, $obj->getName());
    }
}
