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

use WBW\Library\Widget\Component\Color\LightGreenColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\Color\TestLightGreenColorTrait;

/**
 * Light green color trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Color
 */
class LightGreenColorTraitTest extends AbstractTestCase {

    /**
     * Test setLightGreenColor()
     *
     * @return void
     */
    public function testSetLightGreenColor(): void {

        // Set a Light green color mock.
        $lightGreenColor = $this->getMockBuilder(LightGreenColorInterface::class)->getMock();

        $obj = new TestLightGreenColorTrait();

        $obj->setLightGreenColor($lightGreenColor);
        $this->assertSame($lightGreenColor, $obj->getLightGreenColor());
    }
}
