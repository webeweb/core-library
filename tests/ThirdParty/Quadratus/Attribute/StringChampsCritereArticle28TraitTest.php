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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereArticle28Trait;

/**
 * Champs critere article2_8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereArticle28TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereArticle28() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle28() {

        $obj = new TestStringChampsCritereArticle28Trait();

        $obj->setChampsCritereArticle28("champsCritereArticle28");
        $this->assertEquals("champsCritereArticle28", $obj->getChampsCritereArticle28());
    }
}
