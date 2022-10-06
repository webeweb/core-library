<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Manager;

use WBW\Library\Symfony\Manager\ColorManagerInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Manager\TestColorManagerTrait;

/**
 * Color manager trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Manager
 */
class ColorManagerTraitTest extends AbstractTestCase {

    /**
     * Tests setColorManager()
     *
     * @return void
     */
    public function testSetColorManager(): void {

        // Set a Color manager mock.
        $colorManager = $this->getMockBuilder(ColorManagerInterface::class)->getMock();

        $obj = new TestColorManagerTrait();

        $obj->setColorManager($colorManager);
        $this->assertSame($colorManager, $obj->getColorManager());
    }
}
