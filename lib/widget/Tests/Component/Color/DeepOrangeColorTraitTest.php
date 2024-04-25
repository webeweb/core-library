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

use WBW\Library\Widget\Component\Color\DeepOrangeColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\Color\TestDeepOrangeColorTrait;

/**
 * Deep orange color trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Color
 */
class DeepOrangeColorTraitTest extends AbstractTestCase {

    /**
     * Test setDeepOrangeColor()
     *
     * @return void
     */
    public function testSetDeepOrangeColor(): void {

        // Set a Deep orange color mock.
        $deepOrangeColor = $this->getMockBuilder(DeepOrangeColorInterface::class)->getMock();

        $obj = new TestDeepOrangeColorTrait();

        $obj->setDeepOrangeColor($deepOrangeColor);
        $this->assertSame($deepOrangeColor, $obj->getDeepOrangeColor());
    }
}
