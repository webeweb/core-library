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

use WBW\Library\Widget\Component\Color\DeepPurpleColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\Color\TestDeepPurpleColorTrait;

/**
 * Deep purple color trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Color
 */
class DeepPurpleColorTraitTest extends AbstractTestCase {

    /**
     * Test setDeepPurpleColor()
     *
     * @return void
     */
    public function testSetDeepPurpleColor(): void {

        // Set a Deep purple color mock.
        $deepPurpleColor = $this->getMockBuilder(DeepPurpleColorInterface::class)->getMock();

        $obj = new TestDeepPurpleColorTrait();

        $obj->setDeepPurpleColor($deepPurpleColor);
        $this->assertSame($deepPurpleColor, $obj->getDeepPurpleColor());
    }
}
