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

use WBW\Library\Widget\Component\Color\GreyColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\Color\TestGreyColorTrait;

/**
 * Grey color trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Color
 */
class GreyColorTraitTest extends AbstractTestCase {

    /**
     * Test setGreyColor()
     *
     * @return void
     */
    public function testSetGreyColor(): void {

        // Set a Grey color mock.
        $greyColor = $this->getMockBuilder(GreyColorInterface::class)->getMock();

        $obj = new TestGreyColorTrait();

        $obj->setGreyColor($greyColor);
        $this->assertSame($greyColor, $obj->getGreyColor());
    }
}
