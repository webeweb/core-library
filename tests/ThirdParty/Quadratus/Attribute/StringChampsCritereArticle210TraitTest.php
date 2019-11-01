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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereArticle210Trait;

/**
 * Champs critere article2_10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereArticle210TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereArticle210() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle210() {

        $obj = new TestStringChampsCritereArticle210Trait();

        $obj->setChampsCritereArticle210("champsCritereArticle210");
        $this->assertEquals("champsCritereArticle210", $obj->getChampsCritereArticle210());
    }
}
