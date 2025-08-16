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

use WBW\Library\XmlTv\Model\Desc;
use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Traits\Arrays\TestArrayDescsTrait;

/**
 * Array descriptions trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Traits\Arrays
 */
class ArrayDescsTraitTest extends AbstractTestCase {

    /**
     * Test addDesc()
     *
     * @return void
     */
    public function testAddDesc(): void {

        // Set a Desc mock.
        $desc = new Desc();

        $obj = new TestArrayDescsTrait();

        $obj->addDesc($desc);
        $this->assertSame($desc, $obj->getDescs()[0]);
        $this->assertEquals(1, $obj->getNumberDescs());
        $this->assertTrue($obj->hasDescs());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestArrayDescsTrait();

        $this->assertEquals([], $obj->getDescs());
        $this->assertEquals(0, $obj->getNumberDescs());
        $this->assertFalse($obj->hasDescs());
    }
}
