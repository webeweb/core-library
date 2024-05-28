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

namespace WBW\Library\Easilys\Tests\Provider\General;

use Throwable;
use WBW\Library\Common\Provider\ProviderException;
use WBW\Library\Easilys\Provider\ApiProvider;
use WBW\Library\Easilys\Request\General\GetSiteRequest;
use WBW\Library\Easilys\Request\General\GetSitesFromTreeWithParentRequest;
use WBW\Library\Easilys\Request\General\GetSitesNotInTreeRequest;
use WBW\Library\Easilys\Request\General\GetSitesRequest;
use WBW\Library\Easilys\Request\General\GetSitesRootRequest;
use WBW\Library\Easilys\Request\General\GetSitesRootTreeRequest;
use WBW\Library\Easilys\Response\General\GetSitesResponse;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * API provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Provider\General
 */
class ApiProviderTest extends AbstractTestCase {

    /**
     * Test getSite()
     *
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetSite(): void {

        // Set a request mock.
        $request = new GetSiteRequest();
        $request->setIdSite(1);

        $obj = new ApiProvider($this->easilys["endpoint"], $this->easilys["access_token"]);

        try {

            $res = $obj->sendRequest($request);

            $this->assertInstanceOf(GetSitesResponse::class, $res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(ProviderException::class, $ex);
        }
    }

    /**
     * Test getSites()
     *
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetSites(): void {

        // Set a request mock.
        $request = new GetSitesRequest();

        $obj = new ApiProvider($this->easilys["endpoint"], $this->easilys["access_token"]);

        try {

            $res = $obj->sendRequest($request);

            $this->assertInstanceOf(GetSitesResponse::class, $res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(ProviderException::class, $ex);
        }
    }

    /**
     * Test getSitesFromTreeWithParent()
     *
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetSitesFromTreeWithParent(): void {

        // Set a request mock.
        $request = new GetSitesFromTreeWithParentRequest();
        $request->setIdSite(1);
        $request->setIdTree(1);

        $obj = new ApiProvider($this->easilys["endpoint"], $this->easilys["access_token"]);

        try {

            $res = $obj->sendRequest($request);

            $this->assertInstanceOf(GetSitesResponse::class, $res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(ProviderException::class, $ex);
        }
    }

    /**
     * Test getSitesNotInTree()
     *
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetSitesNotInTree(): void {

        // Set a request mock.
        $request = new GetSitesNotInTreeRequest();
        $request->setIdTree(1);

        $obj = new ApiProvider($this->easilys["endpoint"], $this->easilys["access_token"]);

        try {

            $res = $obj->sendRequest($request);

            $this->assertInstanceOf(GetSitesResponse::class, $res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(ProviderException::class, $ex);
        }
    }

    /**
     * Test getSitesRoot()
     *
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetSitesRoot(): void {

        // Set a request mock.
        $request = new GetSitesRootRequest();
        $request->setId(1);

        $obj = new ApiProvider($this->easilys["endpoint"], $this->easilys["access_token"]);

        try {

            $res = $obj->sendRequest($request);

            $this->assertInstanceOf(GetSitesResponse::class, $res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(ProviderException::class, $ex);
        }
    }

    /**
     * Test getSitesRootTree()
     *
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetSitesRootTree(): void {

        // Set a request mock.
        $request = new GetSitesRootTreeRequest();
        $request->setId(1);
        $request->setIdTree(1);

        $obj = new ApiProvider($this->easilys["endpoint"], $this->easilys["access_token"]);

        try {

            $res = $obj->sendRequest($request);

            $this->assertInstanceOf(GetSitesResponse::class, $res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(ProviderException::class, $ex);
        }
    }
}
