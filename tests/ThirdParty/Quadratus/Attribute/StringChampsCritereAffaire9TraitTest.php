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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereAffaire9Trait;

/**
 * Champs critere affaire9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereAffaire9TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereAffaire9() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire9() {

        $obj = new TestStringChampsCritereAffaire9Trait();

        $obj->setChampsCritereAffaire9("champsCritereAffaire9");
        $this->assertEquals("champsCritereAffaire9", $obj->getChampsCritereAffaire9());
    }
}
