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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereArticle9Trait;

/**
 * Champs critere article9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereArticle9TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereArticle9() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle9() {

        $obj = new TestStringChampsCritereArticle9Trait();

        $obj->setChampsCritereArticle9("champsCritereArticle9");
        $this->assertEquals("champsCritereArticle9", $obj->getChampsCritereArticle9());
    }
}
