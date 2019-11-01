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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereTab2Trait;

/**
 * Lib critere tab2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereTab2TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereTab2() method.
     *
     * @return void
     */
    public function testSetLibCritereTab2() {

        $obj = new TestStringLibCritereTab2Trait();

        $obj->setLibCritereTab2("libCritereTab2");
        $this->assertEquals("libCritereTab2", $obj->getLibCritereTab2());
    }
}
