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

use WBW\Library\Widget\Component\Color\YellowColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\Color\TestYellowColorTrait;

/**
 * Yellow color trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Color
 */
class YellowColorTraitTest extends AbstractTestCase {

    /**
     * Test setYellowColor()
     *
     * @return void
     */
    public function testSetYellowColor(): void {

        // Set a Yellow color mock.
        $yellowColor = $this->getMockBuilder(YellowColorInterface::class)->getMock();

        $obj = new TestYellowColorTrait();

        $obj->setYellowColor($yellowColor);
        $this->assertSame($yellowColor, $obj->getYellowColor());
    }
}
