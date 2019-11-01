<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumNoteTrait;

/**
 * Num note trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumNoteTraitTest extends AbstractTestCase {

    /**
     * Tests the setNumNote() method.
     *
     * @return void
     */
    public function testSetNumNote() {

        $obj = new TestStringNumNoteTrait();

        $obj->setNumNote("numNote");
        $this->assertEquals("numNote", $obj->getNumNote());
    }
}
