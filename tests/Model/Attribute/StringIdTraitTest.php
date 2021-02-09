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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringIdTrait;

/**
 * String id trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringIdTraitTest extends AbstractTestCase {

    /**
     * Tests the setId() method.
     *
     * @return void
     */
    public function testSetId(): void {

        $obj = new TestStringIdTrait();

        $obj->setId("id");
        $this->assertEquals("id", $obj->getId());
    }
}
