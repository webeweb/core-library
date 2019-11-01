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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereNum1Trait;

/**
 * Lib critere num1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereNum1TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereNum1() method.
     *
     * @return void
     */
    public function testSetLibCritereNum1() {

        $obj = new TestStringLibCritereNum1Trait();

        $obj->setLibCritereNum1("libCritereNum1");
        $this->assertEquals("libCritereNum1", $obj->getLibCritereNum1());
    }
}
