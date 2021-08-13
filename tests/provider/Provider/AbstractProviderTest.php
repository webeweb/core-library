<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Provider\Tests\Provider;

use WBW\Library\Provider\Tests\AbstractTestCase;
use WBW\Library\Provider\Tests\Fixtures\Provider\TestProvider;

/**
 * Abstract provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Provider\Tests\Provider
 */
class AbstractProviderTest extends AbstractTestCase {

    /**
     * Tests the logInfo() method.
     *
     * @return void
     */
    public function testLogInfo(): void {

        $obj = new TestProvider($this->logger);

        $this->assertSame($obj, $obj->logInfo("message", []));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestProvider($this->logger);

        $this->assertSame($this->logger, $obj->getLogger());
        $this->assertFalse($obj->getDebug());
    }
}