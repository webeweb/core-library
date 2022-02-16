<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SkiData\Tests\Api;

use WBW\Library\SkiData\Api\ParserInterface;
use WBW\Library\SkiData\Tests\AbstractTestCase;

/**
 * Parser interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\SkiData\Tests\Api
 */
class ParserInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__constructor(): void {

        $this->assertEquals("Ymd", ParserInterface::DATE_FORMAT);
        $this->assertEquals("Ymd His", ParserInterface::DATETIME_FORMAT);
    }
}
