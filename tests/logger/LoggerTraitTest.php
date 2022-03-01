<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Logger\Tests;

use WBW\Library\Logger\Tests\Fixtures\TestLoggerTrait;

/**
 * Logger trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Logger\Tests
 */
class LoggerTraitTest extends AbstractTestCase {

    /**
     * Tests setLogger()
     *
     * @return void
     */
    public function testSetLogger(): void {

        $obj = new TestLoggerTrait();

        $obj->setLogger($this->logger);
        $this->assertSame($this->logger, $obj->getLogger());
    }

}
