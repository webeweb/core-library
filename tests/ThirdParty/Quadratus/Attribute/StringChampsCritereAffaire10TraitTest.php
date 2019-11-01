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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereAffaire10Trait;

/**
 * Champs critere affaire10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereAffaire10TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereAffaire10() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire10() {

        $obj = new TestStringChampsCritereAffaire10Trait();

        $obj->setChampsCritereAffaire10("champsCritereAffaire10");
        $this->assertEquals("champsCritereAffaire10", $obj->getChampsCritereAffaire10());
    }
}
