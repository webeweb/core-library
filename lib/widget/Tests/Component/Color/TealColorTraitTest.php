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

use WBW\Library\Widget\Component\Color\TealColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\Color\TestTealColorTrait;

/**
 * Teal color trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Color
 */
class TealColorTraitTest extends AbstractTestCase {

    /**
     * Test setTealColor()
     *
     * @return void
     */
    public function testSetTealColor(): void {

        // Set a Teal color mock.
        $tealColor = $this->getMockBuilder(TealColorInterface::class)->getMock();

        $obj = new TestTealColorTrait();

        $obj->setTealColor($tealColor);
        $this->assertSame($tealColor, $obj->getTealColor());
    }
}
