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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritere2Trait;

/**
 * Lib critere2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritere2TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritere2() method.
     *
     * @return void
     */
    public function testSetLibCritere2() {

        $obj = new TestStringLibCritere2Trait();

        $obj->setLibCritere2("libCritere2");
        $this->assertEquals("libCritere2", $obj->getLibCritere2());
    }
}
