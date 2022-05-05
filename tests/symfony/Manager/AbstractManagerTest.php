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
     */
    public function testAddProvider(): void {

        $obj = new TestManager($this->logger);

        $obj->addProvider($this->provider);
        $this->assertSame($this->provider, $obj->getProviders()[0]);
        $this->assertEquals(1, $obj->size());
    }

    /**
     * Tests contains()
     *
     * @return void
     */
    public function testContains(): void {

        $obj = new TestManager($this->logger);

        $this->assertFalse($obj->contains($this->provider));

        $obj->addProvider($this->provider);
        $this->assertTrue($obj->contains($this->provider));
    }

    /**
     * Tests hasProviders()
     *
     * @return void
     */
    public function testHasProviders(): void {

        $obj = new TestManager($this->logger);

        $this->assertFalse($obj->hasProviders());

        $obj->addProvider($this->provider);
        $this->assertTrue($obj->hasProviders());
    }

    /**
     * Tests indexOf()
     *
     * @return void
     */
    public function testIndexOf(): void {

        // Set a Provider mock.
        $provider = $this->getMockBuilder(ProviderInterface::class)->getMock();

        $obj = new TestManager($this->logger);

        $obj->addProvider($provider);
        $this->assertEquals(-1, $obj->indexOf($this->provider));

        $obj->addProvider($this->provider);
        $this->assertEquals(1, $obj->indexOf($this->provider));
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
