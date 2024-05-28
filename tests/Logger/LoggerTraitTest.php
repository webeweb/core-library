<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Logger;

use Psr\Log\LoggerInterface;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Logger\TestLoggerTrait;

/**
 * Logger trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Logger\Tests
 */
class LoggerTraitTest extends AbstractTestCase {

    /**
     * Test setLogger()
     *
     * @return void
     */
    public function testSetLogger(): void {

        // Set a Logger mock.
        $logger = $this->getMockBuilder(LoggerInterface::class)->getMock();

        $obj = new TestLoggerTrait();

        $obj->setLogger($logger);
        $this->assertSame($logger, $obj->getLogger());
    }

}
