<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Manager;

use WBW\Library\Symfony\Manager\ManagerInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Manager\TestManagerTrait;

/**
 * Manager trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Manager
 */
class ManagerTraitTest extends AbstractTestCase {

    /**
     * Tests setManager()
     *
     * @return void
     */
    public function testSetManager(): void {

        // Set a Manager mock.
        $manager = $this->getMockBuilder(ManagerInterface::class)->getMock();

        $obj = new TestManagerTrait();

        $obj->setManager($manager);
        $this->assertSame($manager, $obj->getManager());
    }
}
