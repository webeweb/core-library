<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Manager;

use Exception;
use InvalidArgumentException;
use WBW\Library\Symfony\Exception\AlreadyRegisteredProviderException;
use WBW\Library\Symfony\Manager\ColorManager;
use WBW\Library\Symfony\Manager\ColorManagerInterface;
use WBW\Library\Symfony\Manager\ManagerInterface;
use WBW\Library\Symfony\Provider\ColorProviderInterface;
use WBW\Library\Symfony\Provider\ProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Color manager test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Manager
 */
class ColorManagerTest extends AbstractTestCase {

    /**
     * Color provider.
     *
     * @var ColorProviderInterface
     */
    private $colorProvider;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Color provider mock.
        $this->colorProvider = $this->getMockBuilder(ColorProviderInterface::class)->getMock();
        $this->colorProvider->expects($this->any())->method("getDomain")->willReturn("domain");
        $this->colorProvider->expects($this->any())->method("getName")->willReturn("name");
    }

    /**
     * Tests addProvider()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddProvider(): void {

        $obj = new ColorManager($this->logger);

        $obj->addProvider($this->colorProvider);
        $this->assertSame($this->colorProvider, $obj->getProviders()[0]);
    }

    /**
     * Tests addProvider()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testAddProviderWithAlreadyRegisteredException(): void {

        $obj = new ColorManager($this->logger);
        $obj->addProvider($this->colorProvider);

        try {

            $obj->addProvider($this->colorProvider);
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

        $obj = new ColorManager($this->logger);

        $this->assertFalse($obj->contains($this->colorProvider));

        $obj->addProvider($this->colorProvider);
        $this->assertTrue($obj->contains($this->colorProvider));
    }

    /**
     * Tests contains()
     *
     * @return void
     */
    public function testContainsWithInvalidArgumentException(): void {

        // Set a Provider mock.
        $provider = $this->getMockBuilder(ProviderInterface::class)->getMock();

        $obj = new ColorManager($this->logger);

        try {

            $obj->contains($provider);
        } catch (Exception $ex) {

            $this->assertInstanceOf(InvalidArgumentException::class, $ex);
            $this->assertEquals("The provider must implements " . ColorProviderInterface::class, $ex->getMessage());
        }
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.core.manager.color", ColorManager::SERVICE_NAME);

        $obj = new ColorManager($this->logger);

        $this->assertInstanceOf(ManagerInterface::class, $obj);
        $this->assertInstanceOf(ColorManagerInterface::class, $obj);

        $this->assertEquals([], $obj->getProviders());
    }
}
