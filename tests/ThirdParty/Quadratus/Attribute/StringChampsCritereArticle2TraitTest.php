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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereArticle2Trait;

/**
 * Champs critere article2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereArticle2TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereArticle2() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle2() {

        $obj = new TestStringChampsCritereArticle2Trait();

        $obj->setChampsCritereArticle2("champsCritereArticle2");
        $this->assertEquals("champsCritereArticle2", $obj->getChampsCritereArticle2());
    }
}
