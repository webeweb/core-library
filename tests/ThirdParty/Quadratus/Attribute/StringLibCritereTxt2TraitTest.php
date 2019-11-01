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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereTxt2Trait;

/**
 * Lib critere txt2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereTxt2TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereTxt2() method.
     *
     * @return void
     */
    public function testSetLibCritereTxt2() {

        $obj = new TestStringLibCritereTxt2Trait();

        $obj->setLibCritereTxt2("libCritereTxt2");
        $this->assertEquals("libCritereTxt2", $obj->getLibCritereTxt2());
    }
}
