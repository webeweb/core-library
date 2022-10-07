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
use WBW\Library\Symfony\Manager\ManagerInterface;
use WBW\Library\Symfony\Manager\StylesheetManager;
use WBW\Library\Symfony\Manager\StylesheetManagerInterface;
use WBW\Library\Symfony\Provider\ProviderInterface;
use WBW\Library\Symfony\Provider\StylesheetProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Stylesheet manager test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Manager
 */
class StylesheetManagerTest extends AbstractTestCase {

    /**
     * Stylesheet provider.
     *
     * @var StylesheetProviderInterface
     */
    private $stylesheetProvider;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Stylesheet provider mock.
        $this->stylesheetProvider = $this->getMockBuilder(StylesheetProviderInterface::class)->getMock();
        $this->stylesheetProvider->expects($this->any())->method("getStylesheets")->willReturn([]);
    }

    /**
     * Tests addProvider()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddProvider(): void {

        $obj = new StylesheetManager($this->logger);

        $obj->addProvider($this->stylesheetProvider);
        $this->assertSame($this->stylesheetProvider, $obj->getProviders()[0]);
    }

    /**
     * Tests addProvider()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddProviderWithAlreadyRegisteredException(): void {

        $obj = new StylesheetManager($this->logger);
        $obj->addProvider($this->stylesheetProvider);

        try {

            $obj->addProvider($this->stylesheetProvider);
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

        $obj = new StylesheetManager($this->logger);

        $this->assertFalse($obj->contains($this->stylesheetProvider));

        $obj->addProvider($this->stylesheetProvider);
        $this->assertTrue($obj->contains($this->stylesheetProvider));
    }

    /**
     * Tests contains()
     *
     * @return void
     */
    public function testContainsWithInvalidArgumentException(): void {

        // Set a Provider mock.
        $provider = $this->getMockBuilder(ProviderInterface::class)->getMock();

        $obj = new StylesheetManager($this->logger);

        try {

            $obj->contains($provider);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The provider must implements " . StylesheetProviderInterface::class, $ex->getMessage());
        }
    }

    /**
     * Tests getStylesheets()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testGetStylesheets(): void {

        $obj = new StylesheetManager($this->logger);

        $obj->addProvider($this->stylesheetProvider);
        $this->assertEquals([], $obj->getStylesheets());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.manager.stylesheet", StylesheetManager::SERVICE_NAME);

        $obj = new StylesheetManager($this->logger);

        $this->assertInstanceOf(ManagerInterface::class, $obj);
        $this->assertInstanceOf(StylesheetManagerInterface::class, $obj);

        $this->assertEquals([], $obj->getProviders());
    }
}
