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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereByte1Trait;

/**
 * Lib critere byte1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereByte1TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereByte1() method.
     *
     * @return void
     */
    public function testSetLibCritereByte1() {

        $obj = new TestStringLibCritereByte1Trait();

        $obj->setLibCritereByte1("libCritereByte1");
        $this->assertEquals("libCritereByte1", $obj->getLibCritereByte1());
    }
}
