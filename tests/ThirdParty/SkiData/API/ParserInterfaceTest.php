<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\SkiData\API;

use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\SkiData\API\ParserInterface;

/**
 * Parser interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\ThirdParty\SkiData\API
 */
class ParserInterfaceTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $this->assertEquals("Ymd", ParserInterface::DATE_FORMAT);
        $this->assertEquals("Ymd His", ParserInterface::DATETIME_FORMAT);
    }
}
