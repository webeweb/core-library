<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets\Button;

use WBW\Library\Symfony\Assets\Button\ButtonInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Assets\Button\TestButtonTrait;

/**
 * Button trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets\Button
 */
class ButtonTraitTest extends AbstractTestCase {

    /**
     * Tests setButton()
     *
     * @return void
     */
    public function testSetButton(): void {

        // Set a Button mock.
        $button = $this->getMockBuilder(ButtonInterface::class)->getMock();

        $obj = new TestButtonTrait();

        $obj->setButton($button);
        $this->assertSame($button, $obj->getButton());
    }
}
