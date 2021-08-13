<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Adoria\Tests\API;

use WBW\Library\Adoria\API\ApiProviderInterface;
use WBW\Library\Adoria\Tests\AbstractTestCase;

/**
 * API provider interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Adoria\Tests\API
 */
class ApiProviderInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("http://ws.adoria.com", ApiProviderInterface::ENDPOINT_PATH);
        $this->assertEquals("/MdbProcurement.adoria.ExternalsServices/EProcurement/Buying/V10.svc/rest/AcountingInterface", ApiProviderInterface::REQUEST_DATA_RESOURCE_PATH);
    }
}
