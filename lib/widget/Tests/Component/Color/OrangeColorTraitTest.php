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

use WBW\Library\Widget\Component\Color\OrangeColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\Color\TestOrangeColorTrait;

/**
 * Orange color trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Color
 */
class OrangeColorTraitTest extends AbstractTestCase {

    /**
     * Test setOrangeColor()
     *
     * @return void
     */
    public function testSetOrangeColor(): void {

        // Set an Orange color mock.
        $orangeColor = $this->getMockBuilder(OrangeColorInterface::class)->getMock();

        $obj = new TestOrangeColorTrait();

        $obj->setOrangeColor($orangeColor);
        $this->assertSame($orangeColor, $obj->getOrangeColor());
    }
}
