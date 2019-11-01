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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereArticle24Trait;

/**
 * Champs critere article2_4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereArticle24TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereArticle24() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle24() {

        $obj = new TestStringChampsCritereArticle24Trait();

        $obj->setChampsCritereArticle24("champsCritereArticle24");
        $this->assertEquals("champsCritereArticle24", $obj->getChampsCritereArticle24());
    }
}
