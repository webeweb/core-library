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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereArticle7Trait;

/**
 * Champs critere article7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereArticle7TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereArticle7() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle7() {

        $obj = new TestStringChampsCritereArticle7Trait();

        $obj->setChampsCritereArticle7("champsCritereArticle7");
        $this->assertEquals("champsCritereArticle7", $obj->getChampsCritereArticle7());
    }
}
