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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereNum2Trait;

/**
 * Lib critere num2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereNum2TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereNum2() method.
     *
     * @return void
     */
    public function testSetLibCritereNum2() {

        $obj = new TestStringLibCritereNum2Trait();

        $obj->setLibCritereNum2("libCritereNum2");
        $this->assertEquals("libCritereNum2", $obj->getLibCritereNum2());
    }
}
