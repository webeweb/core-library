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

use WBW\Library\Widget\Component\Color\GreenColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\Color\TestGreenColorTrait;

/**
 * Green color trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Color
 */
class GreenColorTraitTest extends AbstractTestCase {

    /**
     * Test setGreenColor()
     *
     * @return void
     */
    public function testSetGreenColor(): void {

        // Set a Green color mock.
        $greenColor = $this->getMockBuilder(GreenColorInterface::class)->getMock();

        $obj = new TestGreenColorTrait();

        $obj->setGreenColor($greenColor);
        $this->assertSame($greenColor, $obj->getGreenColor());
    }
}
