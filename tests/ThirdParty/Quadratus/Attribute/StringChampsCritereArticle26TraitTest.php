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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereArticle26Trait;

/**
 * Champs critere article2_6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereArticle26TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereArticle26() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle26() {

        $obj = new TestStringChampsCritereArticle26Trait();

        $obj->setChampsCritereArticle26("champsCritereArticle26");
        $this->assertEquals("champsCritereArticle26", $obj->getChampsCritereArticle26());
    }
}
