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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereArticle27Trait;

/**
 * Champs critere article2_7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereArticle27TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereArticle27() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle27() {

        $obj = new TestStringChampsCritereArticle27Trait();

        $obj->setChampsCritereArticle27("champsCritereArticle27");
        $this->assertEquals("champsCritereArticle27", $obj->getChampsCritereArticle27());
    }
}
