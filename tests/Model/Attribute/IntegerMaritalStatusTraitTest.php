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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestIntegerMaritalStatusTrait;

/**
 * Integer marital status trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class IntegerMaritalStatusTraitTest extends AbstractTestCase {

    /**
     * Tests the setMaritalStatus() method.
     *
     * @return void
     */
    public function testSetMaritalStatus(): void {

        $obj = new TestIntegerMaritalStatusTrait();

        $obj->setMaritalStatus(1);
        $this->assertEquals(1, $obj->getMaritalStatus());
    }
}
