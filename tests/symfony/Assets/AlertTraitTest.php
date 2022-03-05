<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Assets;

use WBW\Library\Symfony\Assets\AlertInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Assets\TestAlertTrait;

/**
 * Alert trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Assets
 */
class AlertTraitTest extends AbstractTestCase {

    /**
     * Tests setAlert()
     *
     * @return void
     */
    public function testSetAlert(): void {

        // Set an Alert mock.
        $alert = $this->getMockBuilder(AlertInterface::class)->getMock();

        $obj = new TestAlertTrait();

        $obj->setAlert($alert);
        $this->assertSame($alert, $obj->getAlert());
    }
}
