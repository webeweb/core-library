<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Provider\Tests;

use Exception;
use InvalidArgumentException;
use WBW\Library\Provider\Tests\Fixtures\Request\TestRequest;
use WBW\Library\Provider\Tests\Fixtures\Request\TestSubstituableRequest;
use WBW\Library\Provider\Tests\Fixtures\TestProvider;

/**
 * Abstract provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Provider\Tests
 */
class AbstractProviderTest extends AbstractTestCase {

    /**
     * Tests buildResourcePath()
     *
     * @return void
     */
    public function testBuildResourcePath(): void {

        // Set a Request mock.
        $request = new TestRequest();

        $obj = new TestProvider();

        $this->assertEquals("/resource-path", $obj->buildResourcePath($request));
    }

    /**
     * Tests buildResourcePath()
     *
     * @return void
     */
    public function testBuildResourcePathWithInvalidArgumentException(): void {

        // Set a Substituable request mock.
        $request = new TestSubstituableRequest();

        $obj = new TestProvider();

        try {

            $obj->buildResourcePath($request);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The substituable value "{id}" is missing', $ex->getMessage());
        }
    }

    /**
     * Tests buildResourcePath()
     *
     * @return void
     */
    public function testBuildResourcePathWithSubstituableRequest(): void {

        // Set a Substituable request mock.
        $request = new TestSubstituableRequest();
        $request->setId("id");

        $obj = new TestProvider();

        $this->assertEquals("/resource-path/id", $obj->buildResourcePath($request));
    }

    /**
     * Tests logInfo()
     *
     * @return void
     */
    public function testLogInfo(): void {

        $obj = new TestProvider($this->logger);

        $this->assertSame($obj, $obj->logInfo("message", []));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestProvider($this->logger);

        $this->assertSame($this->logger, $obj->getLogger());
        $this->assertFalse($obj->getDebug());
    }
}
