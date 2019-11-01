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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereArticle8Trait;

/**
 * Champs critere article8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereArticle8TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereArticle8() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle8() {

        $obj = new TestStringChampsCritereArticle8Trait();

        $obj->setChampsCritereArticle8("champsCritereArticle8");
        $this->assertEquals("champsCritereArticle8", $obj->getChampsCritereArticle8());
    }
}
