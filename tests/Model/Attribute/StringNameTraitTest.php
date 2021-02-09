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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringNameTrait;

/**
 * String name trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringNameTraitTest extends AbstractTestCase {

    /**
     * Tests the setName() method.
     *
     * @return void
     */
    public function testSetName(): void {

        $obj = new TestStringNameTrait();

        $obj->setName("name");
        $this->assertEquals("name", $obj->getName());
    }
}
