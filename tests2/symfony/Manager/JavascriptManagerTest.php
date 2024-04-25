<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Manager;

use InvalidArgumentException;
use Throwable;
use WBW\Library\Symfony\Exception\AlreadyRegisteredProviderException;
use WBW\Library\Symfony\Manager\JavascriptManager;
use WBW\Library\Symfony\Manager\JavascriptManagerInterface;
use WBW\Library\Symfony\Manager\ManagerInterface;
use WBW\Library\Symfony\Provider\JavascriptProviderInterface;
use WBW\Library\Symfony\Provider\ProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Javascript manager test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Manager
 */
class JavascriptManagerTest extends AbstractTestCase {

    /**
     * Javascript provider.
     *
     * @var JavascriptProviderInterface
     */
    private $javascriptProvider;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Javascript provider mock.
        $this->javascriptProvider = $this->getMockBuilder(JavascriptProviderInterface::class)->getMock();
        $this->javascriptProvider->expects($this->any())->method("getJavascripts")->willReturn([]);
    }

    /**
     * Test addProvider()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testAddProvider(): void {

        $obj = new JavascriptManager($this->logger);

        $obj->addProvider($this->javascriptProvider);
        $this->assertSame($this->javascriptProvider, $obj->getProviders()[0]);
    }

    /**
     * Test addProvider()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testAddProviderWithAlreadyRegisteredException(): void {

        $obj = new JavascriptManager($this->logger);
        $obj->addProvider($this->javascriptProvider);

        try {

            $obj->addProvider($this->javascriptProvider);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(AlreadyRegisteredProviderException::class, $ex);
        }
    }

    /**
     * Test containsProvider()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testContainsProvider(): void {

        $obj = new JavascriptManager($this->logger);

        $this->assertFalse($obj->containsProvider($this->javascriptProvider));

        $obj->addProvider($this->javascriptProvider);
        $this->assertTrue($obj->containsProvider($this->javascriptProvider));
    }

    /**
     * Test contains()
     *
     * @return void
     */
    public function testContainsWithInvalidArgumentException(): void {

        // Set a Provider mock.
        $provider = $this->getMockBuilder(ProviderInterface::class)->getMock();

        $obj = new JavascriptManager($this->logger);

        try {

            $obj->containsProvider($provider);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The provider must implements " . JavascriptProviderInterface::class, $ex->getMessage());
        }
    }

    /**
     * Test getJavascripts()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testGetJavascripts(): void {

        $obj = new JavascriptManager($this->logger);

        $obj->addProvider($this->javascriptProvider);
        $this->assertEquals([], $obj->getJavascripts());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.manager.javascript", JavascriptManager::SERVICE_NAME);

        $obj = new JavascriptManager($this->logger);

        $this->assertInstanceOf(ManagerInterface::class, $obj);
        $this->assertInstanceOf(JavascriptManagerInterface::class, $obj);

        $this->assertEquals([], $obj->getProviders());
    }
}
