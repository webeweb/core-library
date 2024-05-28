<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Tests\Provider\Suppliers;

use Throwable;
use WBW\Library\Common\Provider\ProviderException;
use WBW\Library\Easilys\Provider\ApiProvider;
use WBW\Library\Easilys\Request\Suppliers\GetStorehousesSiteRequest;
use WBW\Library\Easilys\Response\Suppliers\GetStorehousesSiteResponse;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * API provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Provider\Suppliers
 */
class ApiProviderTest extends AbstractTestCase {

    /**
     * Test getStorehousesSite()
     *
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetStorehousesSite(): void {

        // Set a request mock.
        $request = new GetStorehousesSiteRequest();
        $request->setIdSite(1);

        $obj = new ApiProvider($this->easilys["endpoint"], $this->easilys["access_token"]);

        try {

            $res = $obj->sendRequest($request);

            $this->assertInstanceOf(GetStorehousesSiteResponse::class, $res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(ProviderException::class, $ex);
        }
    }
}
