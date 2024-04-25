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

use WBW\Library\Widget\Component\Color\WhiteColorInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\Color\TestWhiteColorTrait;

/**
 * White color trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component\Color
 */
class WhiteColorTraitTest extends AbstractTestCase {

    /**
     * Test setWhiteColor()
     *
     * @return void
     */
    public function testSetWhiteColor(): void {

        // Set a White color mock.
        $whiteColor = $this->getMockBuilder(WhiteColorInterface::class)->getMock();

        $obj = new TestWhiteColorTrait();

        $obj->setWhiteColor($whiteColor);
        $this->assertSame($whiteColor, $obj->getWhiteColor());
    }
}
