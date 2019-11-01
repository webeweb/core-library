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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereAffaire2Trait;

/**
 * Champs critere affaire2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereAffaire2TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereAffaire2() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire2() {

        $obj = new TestStringChampsCritereAffaire2Trait();

        $obj->setChampsCritereAffaire2("champsCritereAffaire2");
        $this->assertEquals("champsCritereAffaire2", $obj->getChampsCritereAffaire2());
    }
}
