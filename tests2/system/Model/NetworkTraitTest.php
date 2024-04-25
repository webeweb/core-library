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

namespace WBW\Library\System\Tests\Model;

use WBW\Library\System\Model\NetworkInterface;
use WBW\Library\System\Tests\AbstractTestCase;
use WBW\Library\System\Tests\Fixtures\Model\TestNetworkTrait;

/**
 * Network trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Tests\Model
 */
class NetworkTraitTest extends AbstractTestCase {

    /**
     * Test setNetwork()
     *
     * @return void
     */
    public function testSetNetwork(): void {

        // Set a Network mock.
        $network = $this->getMockBuilder(NetworkInterface::class)->getMock();

        $obj = new TestNetworkTrait();
        $obj->setNetwork($network);

        $this->assertSame($network, $obj->getNetwork());
    }
}
