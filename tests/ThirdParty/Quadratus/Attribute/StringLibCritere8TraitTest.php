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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritere8Trait;

/**
 * Lib critere8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritere8TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritere8() method.
     *
     * @return void
     */
    public function testSetLibCritere8() {

        $obj = new TestStringLibCritere8Trait();

        $obj->setLibCritere8("libCritere8");
        $this->assertEquals("libCritere8", $obj->getLibCritere8());
    }
}
