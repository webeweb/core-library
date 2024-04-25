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

use WBW\Library\Widget\Component\Color\RedColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\Color\TestRedColorTrait;

/**
 * Red color trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Color
 */
class RedColorTraitTest extends AbstractTestCase {

    /**
     * Test setRedColor()
     *
     * @return void
     */
    public function testSetRedColor(): void {

        // Set a Red color mock.
        $redColor = $this->getMockBuilder(RedColorInterface::class)->getMock();

        $obj = new TestRedColorTrait();

        $obj->setRedColor($redColor);
        $this->assertSame($redColor, $obj->getRedColor());
    }
}
