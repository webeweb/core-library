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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereAffaire3Trait;

/**
 * Champs critere affaire3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereAffaire3TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereAffaire3() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire3() {

        $obj = new TestStringChampsCritereAffaire3Trait();

        $obj->setChampsCritereAffaire3("champsCritereAffaire3");
        $this->assertEquals("champsCritereAffaire3", $obj->getChampsCritereAffaire3());
    }
}
