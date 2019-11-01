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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereArticle23Trait;

/**
 * Champs critere article2_3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereArticle23TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereArticle23() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle23() {

        $obj = new TestStringChampsCritereArticle23Trait();

        $obj->setChampsCritereArticle23("champsCritereArticle23");
        $this->assertEquals("champsCritereArticle23", $obj->getChampsCritereArticle23());
    }
}
