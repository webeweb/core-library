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

use WBW\Library\Widget\Component\Color\IndigoColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\Color\TestIndigoColorTrait;

/**
 * Indigo color trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Color
 */
class IndigoColorTraitTest extends AbstractTestCase {

    /**
     * Test setIndigoColor()
     *
     * @return void
     */
    public function testSetIndigoColor(): void {

        // Set an Indigo color mock.
        $indigoColor = $this->getMockBuilder(IndigoColorInterface::class)->getMock();

        $obj = new TestIndigoColorTrait();

        $obj->setIndigoColor($indigoColor);
        $this->assertSame($indigoColor, $obj->getIndigoColor());
    }
}
