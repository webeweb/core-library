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

use WBW\Library\Widget\Component\Color\CyanColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\Color\TestCyanColorTrait;

/**
 * Cyan color trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Color
 */
class CyanColorTraitTest extends AbstractTestCase {

    /**
     * Test setCyanColor()
     *
     * @return void
     */
    public function testSetCyanColor(): void {

        // Set a Cyan color mock.
        $cyanColor = $this->getMockBuilder(CyanColorInterface::class)->getMock();

        $obj = new TestCyanColorTrait();

        $obj->setCyanColor($cyanColor);
        $this->assertSame($cyanColor, $obj->getCyanColor());
    }
}
