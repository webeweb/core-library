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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereArticle10Trait;

/**
 * Champs critere article10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereArticle10TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereArticle10() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle10() {

        $obj = new TestStringChampsCritereArticle10Trait();

        $obj->setChampsCritereArticle10("champsCritereArticle10");
        $this->assertEquals("champsCritereArticle10", $obj->getChampsCritereArticle10());
    }
}
