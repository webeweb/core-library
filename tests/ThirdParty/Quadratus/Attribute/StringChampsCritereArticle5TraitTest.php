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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereArticle5Trait;

/**
 * Champs critere article5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereArticle5TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereArticle5() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle5() {

        $obj = new TestStringChampsCritereArticle5Trait();

        $obj->setChampsCritereArticle5("champsCritereArticle5");
        $this->assertEquals("champsCritereArticle5", $obj->getChampsCritereArticle5());
    }
}
