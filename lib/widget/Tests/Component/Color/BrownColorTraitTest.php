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

use WBW\Library\Widget\Component\Color\BrownColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\Color\TestBrownColorTrait;

/**
 * Brown color trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Color
 */
class BrownColorTraitTest extends AbstractTestCase {

    /**
     * Test setBrownColor()
     *
     * @return void
     */
    public function testSetBrownColor(): void {

        // Set a Brown color mock.
        $brownColor = $this->getMockBuilder(BrownColorInterface::class)->getMock();

        $obj = new TestBrownColorTrait();

        $obj->setBrownColor($brownColor);
        $this->assertSame($brownColor, $obj->getBrownColor());
    }
}
