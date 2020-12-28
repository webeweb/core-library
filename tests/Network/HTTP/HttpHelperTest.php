<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Network\HTTP;

use WBW\Library\Core\Network\HTTP\HttpHelper;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * HTTP helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Network\HTTP
 */
class HttpHelperTest extends AbstractTestCase {

    /**
     * Tests the getHttpMethods() method.
     *
     * @return void
     */
    public function testGetHttpMethods(): void {

        $res = HttpHelper::getHttpMethods();
        $this->assertCount(7, $res);
    }

    /**
     * Tests the getHttpStatus() method.
     *
     * @return void
     */
    public function testGetHttpStatus(): void {

        $res = HttpHelper::getHttpStatus();
        $this->assertCount(57, $res);
    }
}
