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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereArticle21Trait;

/**
 * Champs critere article2_1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereArticle21TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereArticle21() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle21() {

        $obj = new TestStringChampsCritereArticle21Trait();

        $obj->setChampsCritereArticle21("champsCritereArticle21");
        $this->assertEquals("champsCritereArticle21", $obj->getChampsCritereArticle21());
    }
}
