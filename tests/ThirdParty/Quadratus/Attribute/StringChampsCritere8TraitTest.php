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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritere8Trait;

/**
 * Champs critere8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritere8TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritere8() method.
     *
     * @return void
     */
    public function testSetChampsCritere8() {

        $obj = new TestStringChampsCritere8Trait();

        $obj->setChampsCritere8("champsCritere8");
        $this->assertEquals("champsCritere8", $obj->getChampsCritere8());
    }
}
