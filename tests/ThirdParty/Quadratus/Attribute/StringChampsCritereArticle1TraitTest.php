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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereArticle1Trait;

/**
 * Champs critere article1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereArticle1TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereArticle1() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle1() {

        $obj = new TestStringChampsCritereArticle1Trait();

        $obj->setChampsCritereArticle1("champsCritereArticle1");
        $this->assertEquals("champsCritereArticle1", $obj->getChampsCritereArticle1());
    }
}
