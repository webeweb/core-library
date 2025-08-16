<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Tests\Traits\Arrays;

use WBW\Library\XmlTv\Model\Adapter;
use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Traits\Arrays\TestArrayAdaptersTrait;

/**
 * Array adapters trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Traits\Arrays
 */
class ArrayAdaptersTraitTest extends AbstractTestCase {

    /**
     * Test addAdapter()
     *
     * @return void
     */
    public function testAddAdapter(): void {

        // Set an Adapter mock.
        $adapter = new Adapter();

        $obj = new TestArrayAdaptersTrait();

        $obj->addAdapter($adapter);
        $this->assertSame($adapter, $obj->getAdapters()[0]);
        $this->assertEquals(1, $obj->getNumberAdapters());
        $this->assertTrue($obj->hasAdapters());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestArrayAdaptersTrait();

        $this->assertEquals([], $obj->getAdapters());
        $this->assertEquals(0, $obj->getNumberAdapters());
        $this->assertFalse($obj->hasAdapters());
    }
}
