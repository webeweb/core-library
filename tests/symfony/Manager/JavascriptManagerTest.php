<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Manager;

use Exception;
use InvalidArgumentException;
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
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Javascript provider mock.
        $this->javascriptProvider = $this->getMockBuilder(JavascriptProviderInterface::class)->getMock();
        $this->javascriptProvider->expects($this->any())->method("getJavascripts")->willReturn([]);
    }

    /**
     * Tests addProvider()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddProvider(): void {

        $obj = new JavascriptManager($this->logger);

        $obj->addProvider($this->javascriptProvider);
        $this->assertSame($this->javascriptProvider, $obj->getProviders()[0]);
    }

    /**
     * Tests addProvider()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddProviderWithAlreadyRegisteredException(): void {

        $obj = new JavascriptManager($this->logger);
        $obj->addProvider($this->javascriptProvider);

        try {

            $obj->addProvider($this->javascriptProvider);
        } catch (Exception $ex) {

            $this->assertInstanceOf(AlreadyRegisteredProviderException::class, $ex);
        }
    }

    /**
     * Tests contains()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testContains(): void {

        $obj = new JavascriptManager($this->logger);

        $this->assertFalse($obj->contains($this->javascriptProvider));

        $obj->addProvider($this->javascriptProvider);
        $this->assertTrue($obj->contains($this->javascriptProvider));
    }

    /**
     * Tests contains()
     *
     * @return void
     */
    public function testContainsWithInvalidArgumentException(): void {

        // Set a Provider mock.
        $provider = $this->getMockBuilder(ProviderInterface::class)->getMock();

        $obj = new JavascriptManager($this->logger);

        try {

            $obj->contains($provider);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The provider must implements " . JavascriptProviderInterface::class, $ex->getMessage());
        }
    }

    /**
     * Tests getJavascripts()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testGetJavascripts(): void {

        $obj = new JavascriptManager($this->logger);

        $obj->addProvider($this->javascriptProvider);
        $this->assertEquals([], $obj->getJavascripts());
    }

    /**
     * Tests __construct()
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
