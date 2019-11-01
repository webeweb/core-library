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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumCritereDaTxt1Trait;

/**
 * Num critere d a txt1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumCritereDaTxt1TraitTest extends AbstractTestCase {

    /**
     * Tests the setNumCritereDaTxt1() method.
     *
     * @return void
     */
    public function testSetNumCritereDaTxt1() {

        $obj = new TestStringNumCritereDaTxt1Trait();

        $obj->setNumCritereDaTxt1("numCritereDaTxt1");
        $this->assertEquals("numCritereDaTxt1", $obj->getNumCritereDaTxt1());
    }
}
