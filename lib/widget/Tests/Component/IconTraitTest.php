<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Widget\Tests\Component;

use WBW\Library\Widget\Component\IconInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\TestIconTrait;

/**
 * Icon trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component
 */
class IconTraitTest extends AbstractTestCase {

    /**
     * Test setIcon()
     *
     * @return void
     */
    public function testSetIcon(): void {

        // Set an Icon mock.
        $icon = $this->getMockBuilder(IconInterface::class)->getMock();

        $obj = new TestIconTrait();

        $obj->setIcon($icon);
        $this->assertSame($icon, $obj->getIcon());
    }
}
