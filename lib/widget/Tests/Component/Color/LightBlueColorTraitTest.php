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

use WBW\Library\Widget\Component\Color\LightBlueColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\Color\TestLightBlueColorTrait;

/**
 * Light blue color trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Color
 */
class LightBlueColorTraitTest extends AbstractTestCase {

    /**
     * Test setLightBlueColor()
     *
     * @return void
     */
    public function testSetLightBlueColor(): void {

        // Set a Light blue color mock.
        $lightBlueColor = $this->getMockBuilder(LightBlueColorInterface::class)->getMock();

        $obj = new TestLightBlueColorTrait();

        $obj->setLightBlueColor($lightBlueColor);
        $this->assertSame($lightBlueColor, $obj->getLightBlueColor());
    }
}
