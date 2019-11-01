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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereTxt4Trait;

/**
 * Lib critere txt4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereTxt4TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereTxt4() method.
     *
     * @return void
     */
    public function testSetLibCritereTxt4() {

        $obj = new TestStringLibCritereTxt4Trait();

        $obj->setLibCritereTxt4("libCritereTxt4");
        $this->assertEquals("libCritereTxt4", $obj->getLibCritereTxt4());
    }
}
