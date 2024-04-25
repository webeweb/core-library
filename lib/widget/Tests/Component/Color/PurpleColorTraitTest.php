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

use WBW\Library\Widget\Component\Color\PurpleColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\Color\TestPurpleColorTrait;

/**
 * Purple color trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Color
 */
class PurpleColorTraitTest extends AbstractTestCase {

    /**
     * Test setPurpleColor()
     *
     * @return void
     */
    public function testSetPurpleColor(): void {

        // Set a Purple color mock.
        $purpleColor = $this->getMockBuilder(PurpleColorInterface::class)->getMock();

        $obj = new TestPurpleColorTrait();

        $obj->setPurpleColor($purpleColor);
        $this->assertSame($purpleColor, $obj->getPurpleColor());
    }
}
