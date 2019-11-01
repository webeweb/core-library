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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritere2Trait;

/**
 * Champs critere2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritere2TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritere2() method.
     *
     * @return void
     */
    public function testSetChampsCritere2() {

        $obj = new TestStringChampsCritere2Trait();

        $obj->setChampsCritere2("champsCritere2");
        $this->assertEquals("champsCritere2", $obj->getChampsCritere2());
    }
}
