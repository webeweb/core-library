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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereTxt3Trait;

/**
 * Lib critere txt3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereTxt3TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereTxt3() method.
     *
     * @return void
     */
    public function testSetLibCritereTxt3() {

        $obj = new TestStringLibCritereTxt3Trait();

        $obj->setLibCritereTxt3("libCritereTxt3");
        $this->assertEquals("libCritereTxt3", $obj->getLibCritereTxt3());
    }
}
