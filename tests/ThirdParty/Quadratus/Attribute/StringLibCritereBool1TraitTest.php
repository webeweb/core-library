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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereBool1Trait;

/**
 * Lib critere bool1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereBool1TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereBool1() method.
     *
     * @return void
     */
    public function testSetLibCritereBool1() {

        $obj = new TestStringLibCritereBool1Trait();

        $obj->setLibCritereBool1("libCritereBool1");
        $this->assertEquals("libCritereBool1", $obj->getLibCritereBool1());
    }
}
