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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereAffaire4Trait;

/**
 * Champs critere affaire4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereAffaire4TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereAffaire4() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire4() {

        $obj = new TestStringChampsCritereAffaire4Trait();

        $obj->setChampsCritereAffaire4("champsCritereAffaire4");
        $this->assertEquals("champsCritereAffaire4", $obj->getChampsCritereAffaire4());
    }
}
