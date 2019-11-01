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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereArticle4Trait;

/**
 * Champs critere article4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereArticle4TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereArticle4() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle4() {

        $obj = new TestStringChampsCritereArticle4Trait();

        $obj->setChampsCritereArticle4("champsCritereArticle4");
        $this->assertEquals("champsCritereArticle4", $obj->getChampsCritereArticle4());
    }
}
