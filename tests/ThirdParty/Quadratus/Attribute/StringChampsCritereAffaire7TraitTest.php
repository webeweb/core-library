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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereAffaire7Trait;

/**
 * Champs critere affaire7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereAffaire7TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereAffaire7() method.
     *
     * @return void
     */
    public function testSetChampsCritereAffaire7() {

        $obj = new TestStringChampsCritereAffaire7Trait();

        $obj->setChampsCritereAffaire7("champsCritereAffaire7");
        $this->assertEquals("champsCritereAffaire7", $obj->getChampsCritereAffaire7());
    }
}
