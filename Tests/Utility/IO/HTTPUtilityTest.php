<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Utility\IO;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Utility\IO\HTTPUtility;

/**
 * HTTP utility test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Utility\IO
 * @final
 */
final class HTTPUtilityTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getHTTPMethods() method.
     *
     * @return void
     */
    public function testGetHTTPMethods() {

        $res = HTTPUtility::getHTTPMethods();
        $this->assertCount(7, $res);
    }

    /**
     * Tests the getHTTPStatus() method.
     *
     * @return void
     */
    public function testGetHTTPStatus() {

        $res = HTTPUtility::getHTTPStatus();
        $this->assertCount(57, $res);
    }

}
