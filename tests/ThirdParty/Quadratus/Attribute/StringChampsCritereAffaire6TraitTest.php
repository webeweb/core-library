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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereAffaire6Trait;

/**
 * Champs critere affaire6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereAffaire6TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereAffaire6() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire6() {

        $obj = new TestStringChampsCritereAffaire6Trait();

        $obj->setChampsCritereAffaire6("champsCritereAffaire6");
        $this->assertEquals("champsCritereAffaire6", $obj->getChampsCritereAffaire6());
    }
}
