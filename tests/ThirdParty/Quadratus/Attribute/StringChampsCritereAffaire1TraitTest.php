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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereAffaire1Trait;

/**
 * Champs critere affaire1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereAffaire1TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereAffaire1() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire1() {

        $obj = new TestStringChampsCritereAffaire1Trait();

        $obj->setChampsCritereAffaire1("champsCritereAffaire1");
        $this->assertEquals("champsCritereAffaire1", $obj->getChampsCritereAffaire1());
    }
}
