<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Tests\Provider;

use Psr\Log\LoggerInterface;
use WBW\Library\Easilys\Tests\AbstractTestCase;
use WBW\Library\Easilys\Tests\Fixtures\Provider\TestAbstractProvider;

/**
 * Abstract provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Provider
 */
class AbstractProviderTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        // Set a Logger mock.
        $logger = $this->getMockBuilder(LoggerInterface::class)->getMock();

        $obj = new TestAbstractProvider("endpointPath", "accessToken", $logger);

        $this->assertSame($logger, $obj->getLogger());

        $this->assertEquals("accessToken", $obj->getAccessToken());
        $this->assertEquals("endpointPath", $obj->getEndpointPath());
    }
}
