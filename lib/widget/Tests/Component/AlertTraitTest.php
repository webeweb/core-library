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

use WBW\Library\Widget\Component\AlertInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;
use WBW\Library\Widget\Tests\Fixtures\Component\TestAlertTrait;

/**
 * Alert trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component
 */
class AlertTraitTest extends AbstractTestCase {

    /**
     * Test setAlert()
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
