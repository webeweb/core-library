<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Model;

use WBW\Library\Symfony\Model\IconInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Model\TestIconTrait;

/**
 * Icon trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Model
 */
class IconTraitTest extends AbstractTestCase {

    /**
     * Tests setIcon()
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