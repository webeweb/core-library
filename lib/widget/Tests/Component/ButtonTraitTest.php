<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Widget\Tests\Component;

use WBW\Library\Widget\Component\ButtonInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\TestButtonTrait;

/**
 * Button trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component
 */
class ButtonTraitTest extends AbstractTestCase {

    /**
     * Test setButton()
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
