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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringAddresseeTrait;

/**
 * String addressee trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringAddresseeTraitTest extends AbstractTestCase {

    /**
     * Tests the setAddressee() method.
     *
     * @return void
     */
    public function testSetAddressee() {

        $obj = new TestStringAddresseeTrait();

        $obj->setAddressee("addressee");
        $this->assertEquals("addressee", $obj->getAddressee());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__constructor() {

        $obj = new TestStringAddresseeTrait();

        $this->assertNull($obj->getAddressee());
    }
}
