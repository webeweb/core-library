<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Component\Color;

use WBW\Library\Widget\Component\Color\BlackColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\Color\TestBlackColorTrait;

/**
 * Black color trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Color
 */
class BlackColorTraitTest extends AbstractTestCase {

    /**
     * Test setBlackColor()
     *
     * @return void
     */
    public function testSetBlackColor(): void {

        // Set a Black color mock.
        $blackColor = $this->getMockBuilder(BlackColorInterface::class)->getMock();

        $obj = new TestBlackColorTrait();

        $obj->setBlackColor($blackColor);
        $this->assertSame($blackColor, $obj->getBlackColor());
    }
}
