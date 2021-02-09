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
use WBW\Library\Core\Tests\Fixtures\Model\Attribute\TestStringReferenceTrait;

/**
 * String reference trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Attribute
 */
class StringReferenceTraitTest extends AbstractTestCase {

    /**
     * Tests the setReference() method.
     *
     * @return void
     */
    public function testSetReference(): void {

        $obj = new TestStringReferenceTrait();

        $obj->setReference("reference");
        $this->assertEquals("reference", $obj->getReference());
    }
}
