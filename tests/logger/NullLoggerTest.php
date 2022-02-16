<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Logger\Tests;

use WBW\Library\Logger\NullLogger;

/**
 * Null logger test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Logger\Tests
 */
class NullLoggerTest extends AbstractTestCase {

    /**
     * Tests alert()
     *
     * @return void
     */
    public function testAlert(): void {

        $obj = new NullLogger();

        $this->assertNull($obj->alert("alert"));
    }

    /**
     * Tests critical()
     *
     * @return void
     */
    public function testCritical(): void {

        $obj = new NullLogger();

        $this->assertNull($obj->critical("critical"));
    }

    /**
     * Tests debug()
     *
     * @return void
     */
    public function testDebug(): void {

        $obj = new NullLogger();

        $this->assertNull($obj->debug("debug"));
    }

    /**
     * Tests emergency()
     *
     * @return void
     */
    public function testEmergency(): void {

        $obj = new NullLogger();

        $this->assertNull($obj->emergency("emergency"));
    }

    /**
     * Tests error()
     *
     * @return void
     */
    public function testError(): void {

        $obj = new NullLogger();

        $this->assertNull($obj->error("error"));
    }

    /**
     * Tests info()
     *
     * @return void
     */
    public function testInfo(): void {

        $obj = new NullLogger();

        $this->assertNull($obj->info("info"));
    }

    /**
     * Tests notice()
     *
     * @return void
     */
    public function testNotice(): void {

        $obj = new NullLogger();

        $this->assertNull($obj->notice("notice"));
    }

    /**
     * Tests warning()
     *
     * @return void
     */
    public function testWarning(): void {

        $obj = new NullLogger();

        $this->assertNull($obj->warning("warning"));
    }
}
