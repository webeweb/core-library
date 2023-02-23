<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Manager;

use Throwable;
use WBW\Library\Symfony\Provider\ProviderInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Manager\TestManager;

/**
 * Abstract manager test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Manager
 */
class AbstractManagerTest extends AbstractTestCase {

    /**
     * Provider.
     *
     * @var ProviderInterface
     */
    private $provider;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Color provider mock.
        $this->provider = $this->getMockBuilder(ProviderInterface::class)->getMock();
    }

    /**
     * Tests addProvider()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testAddProvider(): void {

        $obj = new TestManager($this->logger);

        $obj->addProvider($this->provider);
        $this->assertSame($this->provider, $obj->getProviders()[0]);
        $this->assertEquals(1, $obj->size());
    }

    /**
     * Tests containsProvider()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testContainsProvider(): void {

        $obj = new TestManager($this->logger);

        $this->assertFalse($obj->containsProvider($this->provider));

        $obj->addProvider($this->provider);
        $this->assertTrue($obj->containsProvider($this->provider));
    }

    /**
     * Tests hasProviders()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testHasProviders(): void {

        $obj = new TestManager($this->logger);

        $this->assertFalse($obj->hasProviders());

        $obj->addProvider($this->provider);
        $this->assertTrue($obj->hasProviders());
    }

    /**
     * Tests indexOfProvider()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testIndexOfProvider(): void {

        // Set a Provider mock.
        $provider = $this->getMockBuilder(ProviderInterface::class)->getMock();

        $obj = new TestManager($this->logger);

        $obj->addProvider($provider);
        $this->assertEquals(-1, $obj->indexOfProvider($this->provider));

        $obj->addProvider($this->provider);
        $this->assertEquals(1, $obj->indexOfProvider($this->provider));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestManager($this->logger);

        $this->assertEquals([], $obj->getProviders());
        $this->assertEquals(0, $obj->size());
    }
}
