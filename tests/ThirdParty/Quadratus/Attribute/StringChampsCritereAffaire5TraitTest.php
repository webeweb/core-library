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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereAffaire5Trait;

/**
 * Champs critere affaire5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereAffaire5TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereAffaire5() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire5() {

        $obj = new TestStringChampsCritereAffaire5Trait();

        $obj->setChampsCritereAffaire5("champsCritereAffaire5");
        $this->assertEquals("champsCritereAffaire5", $obj->getChampsCritereAffaire5());
    }
}
