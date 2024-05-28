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

namespace WBW\Library\Common\Tests\Model\System;

use WBW\Library\Common\Model\System\NetworkCardInterface;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Model\System\TestNetworkCardTrait;

/**
 * Network card trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\System
 */
class NetworkCardTraitTest extends AbstractTestCase {

    /**
     * Test setNetworkCard()
     *
     * @return void
     */
    public function testSetNetworkCard(): void {

        // Set a Network card mock.
        $networkCard = $this->getMockBuilder(NetworkCardInterface::class)->getMock();

        $obj = new TestNetworkCardTrait();
        $obj->setNetworkCard($networkCard);

        $this->assertSame($networkCard, $obj->getNetworkCard());
    }
}
