<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Logger;

use WBW\Library\Common\Logger\NullLogger;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Null logger test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Logger
 */
class NullLoggerTest extends AbstractTestCase {

    /**
     * Test alert()
     *
     * @return void
     */
    public function testAlert(): void {

        $obj = new NullLogger();

        $obj->alert("alert");
        $this->assertNull(null);
    }

    /**
     * Test critical()
     *
     * @return void
     */
    public function testCritical(): void {

        $obj = new NullLogger();

        $obj->critical("critical");
        $this->assertNull(null);
    }

    /**
     * Test debug()
     *
     * @return void
     */
    public function testDebug(): void {

        $obj = new NullLogger();

        $obj->debug("debug");
        $this->assertNull(null);
    }

    /**
     * Test emergency()
     *
     * @return void
     */
    public function testEmergency(): void {

        $obj = new NullLogger();

        $obj->emergency("emergency");
        $this->assertNull(null);
    }

    /**
     * Test error()
     *
     * @return void
     */
    public function testError(): void {

        $obj = new NullLogger();

        $obj->error("error");
        $this->assertNull(null);
    }

    /**
     * Test info()
     *
     * @return void
     */
    public function testInfo(): void {

        $obj = new NullLogger();

        $obj->info("info");
        $this->assertNull(null);
    }

    /**
     * Test notice()
     *
     * @return void
     */
    public function testNotice(): void {

        $obj = new NullLogger();

        $obj->notice("notice");
        $this->assertNull(null);
    }

    /**
     * Test warning()
     *
     * @return void
     */
    public function testWarning(): void {

        $obj = new NullLogger();

        $obj->warning("warning");
        $this->assertNull(null);
    }
}
