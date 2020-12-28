<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestIntegerCivilityTrait;

/**
 * Integer civility trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class IntegerCivilityTraitTest extends AbstractTestCase {

    /**
     * Tests the setCivility() method.
     *
     * @return void
     */
    public function testSetCivility(): void {

        $obj = new TestIntegerCivilityTrait();

        $obj->setCivility(1);
        $this->assertEquals(1, $obj->getCivility());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor(): void {

        $obj = new TestIntegerCivilityTrait();

        $this->assertNull($obj->getCivility());
    }
}
