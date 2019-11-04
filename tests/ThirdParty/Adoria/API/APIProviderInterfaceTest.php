<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Adoria\API;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Adoria\API\APIProviderInterface;

/**
 * API provider interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Adoria\API
 */
class APIProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("http://ws.adoria.com", APIProviderInterface::ENDPOINT_PATH);
        $this->assertEquals("/MdbProcurement.adoria.ExternalsServices/EProcurement/Buying/V10.svc/rest/AcountingInterface", APIProviderInterface::REQUEST_DATA_RESOURCE_PATH);
    }
}
