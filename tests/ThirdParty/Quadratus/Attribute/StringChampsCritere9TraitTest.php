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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritere9Trait;

/**
 * Champs critere9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritere9TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritere9() method.
     *
     * @return void
     */
    public function testSetChampsCritere9() {

        $obj = new TestStringChampsCritere9Trait();

        $obj->setChampsCritere9("champsCritere9");
        $this->assertEquals("champsCritere9", $obj->getChampsCritere9());
    }
}
