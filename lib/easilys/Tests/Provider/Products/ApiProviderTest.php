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

namespace WBW\Library\Easilys\Tests\Provider\Products;

use Throwable;
use WBW\Library\Common\Provider\ProviderException;
use WBW\Library\Easilys\Provider\ApiProvider;
use WBW\Library\Easilys\Request\Products\GetPriceListHeadersSiteRequest;
use WBW\Library\Easilys\Request\Products\GetPriceListSupplierProductsSiteRequest;
use WBW\Library\Easilys\Request\Products\GetProductsSiteRequest;
use WBW\Library\Easilys\Request\Products\GetQualitiesRequest;
use WBW\Library\Easilys\Request\Products\GetRangesRequest;
use WBW\Library\Easilys\Request\Products\GetUnitsRequest;
use WBW\Library\Easilys\Response\Products\GetPriceListHeadersSiteResponse;
use WBW\Library\Easilys\Response\Products\GetPriceListSupplierProductsSiteResponse;
use WBW\Library\Easilys\Response\Products\GetProductsSiteResponse;
use WBW\Library\Easilys\Response\Products\GetQualitiesResponse;
use WBW\Library\Easilys\Response\Products\GetRangesResponse;
use WBW\Library\Easilys\Response\Products\GetUnitsResponse;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * API provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Provider\Products
 */
class ApiProviderTest extends AbstractTestCase {

    /**
     * Test getPriceListHeadersSite()
     *
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetPriceListHeadersSite(): void {

        // Set a request mock.
        $request = new GetPriceListHeadersSiteRequest();
        $request->setIdSite(1);

        $obj = new ApiProvider($this->easilys["endpoint"], $this->easilys["access_token"]);

        try {

            $res = $obj->sendRequest($request);
            $this->assertInstanceOf(GetPriceListHeadersSiteResponse::class, $res);
        } catch (Throwable $ex) {
            $this->assertInstanceOf(ProviderException::class, $ex);
        }
    }

    /**
     * Test getPriceListSupplierProductsSite()
     *
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetPriceListSupplierProductsSite(): void {

        // Set a request mock.
        $request = new GetPriceListSupplierProductsSiteRequest();
        $request->setIdSite(1);

        $obj = new ApiProvider($this->easilys["endpoint"], $this->easilys["access_token"]);

        try {

            $res = $obj->sendRequest($request);
            $this->assertInstanceOf(GetPriceListSupplierProductsSiteResponse::class, $res);
        } catch (Throwable $ex) {
            $this->assertInstanceOf(ProviderException::class, $ex);
        }
    }

    /**
     * Test getProductsSite()
     *
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetProductsSite(): void {

        // Set a request mock.
        $request = new GetProductsSiteRequest();
        $request->setIdSite(1);

        $obj = new ApiProvider($this->easilys["endpoint"], $this->easilys["access_token"]);

        try {

            $res = $obj->sendRequest($request);
            $this->assertInstanceOf(GetProductsSiteResponse::class, $res);
        } catch (Throwable $ex) {
            $this->assertInstanceOf(ProviderException::class, $ex);
        }
    }

    /**
     * Test getQualities()
     *
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetQualities(): void {

        // Set a request mock.
        $request = new GetQualitiesRequest();

        $obj = new ApiProvider($this->easilys["endpoint"], $this->easilys["access_token"]);

        try {

            $res = $obj->sendRequest($request);
            $this->assertInstanceOf(GetQualitiesResponse::class, $res);
        } catch (Throwable $ex) {
            $this->assertInstanceOf(ProviderException::class, $ex);
        }
    }

    /**
     * Test getRanges()
     *
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetRanges(): void {

        // Set a request mock.
        $request = new GetRangesRequest();

        $obj = new ApiProvider($this->easilys["endpoint"], $this->easilys["access_token"]);

        try {

            $res = $obj->sendRequest($request);
            $this->assertInstanceOf(GetRangesResponse::class, $res);
        } catch (Throwable $ex) {
            $this->assertInstanceOf(ProviderException::class, $ex);
        }
    }

    /**
     * Test getUnits()
     *
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetUnits(): void {

        // Set a request mock.
        $request = new GetUnitsRequest();

        $obj = new ApiProvider($this->easilys["endpoint"], $this->easilys["access_token"]);

        try {

            $res = $obj->sendRequest($request);
            $this->assertInstanceOf(GetUnitsResponse::class, $res);
        } catch (Throwable $ex) {
            $this->assertInstanceOf(ProviderException::class, $ex);
        }
    }
}
