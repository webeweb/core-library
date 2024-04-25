<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Provider;

use InvalidArgumentException;
use Psr\Log\LoggerInterface;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Provider\TestAbstractProvider;
use WBW\Library\Common\Tests\Fixtures\Provider\TestAbstractRequest;
use WBW\Library\Common\Tests\Fixtures\Provider\TestSubstituableRequest;
use Throwable;

/**
 * Abstract provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Provider
 */
class AbstractProviderTest extends AbstractTestCase {

    /**
     * Logger.
     *
     * @var LoggerInterface|null
     */
    private $logger;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Logger mock.
        $this->logger = $this->getMockBuilder(LoggerInterface::class)->getMock();
    }

    /**
     * Test buildResourcePath()
     *
     * @return void
     */
    public function testBuildResourcePath(): void {

        // Set a Request mock.
        $request = new TestAbstractRequest();

        $obj = new TestAbstractProvider();

        $this->assertEquals("/resource-path", $obj->buildResourcePath($request));
    }

    /**
     * Test buildResourcePath()
     *
     * @return void
     */
    public function testBuildResourcePathWithInvalidArgumentException(): void {

        // Set an Substituable request mock.
        $request = new TestSubstituableRequest();

        $obj = new TestAbstractProvider();

        try {

            $obj->buildResourcePath($request);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals('The substituable value "{id}" is missing', $ex->getMessage());
        }
    }

    /**
     * Test buildResourcePath()
     *
     * @return void
     */
    public function testBuildResourcePathWithSubstituableRequest(): void {

        // Set an Substituable request mock.
        $request = new TestSubstituableRequest();
        $request->setId("id");

        $obj = new TestAbstractProvider();

        $this->assertEquals("/resource-path/id", $obj->buildResourcePath($request));
    }

    /**
     * Test logInfo()
     *
     * @return void
     */
    public function testLogInfo(): void {

        $obj = new TestAbstractProvider($this->logger);

        $this->assertSame($obj, $obj->logInfo("message", []));
    }

    /**
     * Test newMandatoryParameterException()
     *
     * @return void
     */
    public function testNewMandatoryParameterException(): void {

        $obj = new TestAbstractProvider($this->logger);

        $res = $obj->newMandatoryParameterException("parameter");
        $this->assertEquals('The mandatory parameter "parameter" is missing', $res->getMessage());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestAbstractProvider($this->logger);

        $this->assertSame($this->logger, $obj->getLogger());
        $this->assertFalse($obj->getDebug());
    }
}
