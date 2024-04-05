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

use WBW\Library\System\Model\NetworkCardInterface;
use WBW\Library\System\Tests\AbstractTestCase;
use WBW\Library\System\Tests\Fixtures\Model\TestNetworkCardTrait;

/**
 * Network card trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Tests\Model
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
