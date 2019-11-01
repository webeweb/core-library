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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereTxt1Trait;

/**
 * Lib critere txt1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereTxt1TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereTxt1() method.
     *
     * @return void
     */
    public function testSetLibCritereTxt1() {

        $obj = new TestStringLibCritereTxt1Trait();

        $obj->setLibCritereTxt1("libCritereTxt1");
        $this->assertEquals("libCritereTxt1", $obj->getLibCritereTxt1());
    }
}
