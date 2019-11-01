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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumCritereReclaLst1Trait;

/**
 * Num critere recla lst1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumCritereReclaLst1TraitTest extends AbstractTestCase {

    /**
     * Tests the setNumCritereReclaLst1() method.
     *
     * @return void
     */
    public function testSetNumCritereReclaLst1() {

        $obj = new TestStringNumCritereReclaLst1Trait();

        $obj->setNumCritereReclaLst1("numCritereReclaLst1");
        $this->assertEquals("numCritereReclaLst1", $obj->getNumCritereReclaLst1());
    }
}
