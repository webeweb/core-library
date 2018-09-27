<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ChartAccounts\Model;

use WBW\Library\Core\ChartAccounts\Model\ChartAccountsType;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Chart of accounts type test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ChartAccounts\Model
 * @final
 */
final class ChartAccountsTypeTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ChartAccountsType();

        $this->assertEquals([], $obj->getAccounts());
        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getNumber());
    }

    /**
     * Tests the setLabel() method.
     *
     * @return void
     */
    public function testSetLabel() {

        $obj = new ChartAccountsType();

        $obj->setLabel("label");
        $this->assertEquals("label", $obj->getLabel());
    }

    /**
     * Tests the setNumber() method.
     *
     * @return void
     */
    public function testSetNumber() {

        $obj = new ChartAccountsType();

        $obj->setNumber("number");
        $this->assertEquals("number", $obj->getNumber());
    }

}
