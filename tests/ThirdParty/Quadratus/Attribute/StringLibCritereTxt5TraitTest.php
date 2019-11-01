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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereTxt5Trait;

/**
 * Lib critere txt5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereTxt5TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereTxt5() method.
     *
     * @return void
     */
    public function testSetLibCritereTxt5() {

        $obj = new TestStringLibCritereTxt5Trait();

        $obj->setLibCritereTxt5("libCritereTxt5");
        $this->assertEquals("libCritereTxt5", $obj->getLibCritereTxt5());
    }
}
