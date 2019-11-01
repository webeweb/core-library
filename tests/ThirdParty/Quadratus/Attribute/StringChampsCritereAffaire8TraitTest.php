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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereAffaire8Trait;

/**
 * Champs critere affaire8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereAffaire8TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereAffaire8() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire8() {

        $obj = new TestStringChampsCritereAffaire8Trait();

        $obj->setChampsCritereAffaire8("champsCritereAffaire8");
        $this->assertEquals("champsCritereAffaire8", $obj->getChampsCritereAffaire8());
    }
}
