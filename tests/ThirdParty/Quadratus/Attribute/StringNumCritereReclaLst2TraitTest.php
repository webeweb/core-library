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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumCritereReclaLst2Trait;

/**
 * Num critere recla lst2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumCritereReclaLst2TraitTest extends AbstractTestCase {

    /**
     * Tests the setNumCritereReclaLst2() method.
     *
     * @return void
     */
    public function testSetNumCritereReclaLst2() {

        $obj = new TestStringNumCritereReclaLst2Trait();

        $obj->setNumCritereReclaLst2("numCritereReclaLst2");
        $this->assertEquals("numCritereReclaLst2", $obj->getNumCritereReclaLst2());
    }
}
