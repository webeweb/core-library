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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereArticle22Trait;

/**
 * Champs critere article2_2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereArticle22TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereArticle22() method.
     *
     * @return void
     */
    public function testSetChampsCritereArticle22() {

        $obj = new TestStringChampsCritereArticle22Trait();

        $obj->setChampsCritereArticle22("champsCritereArticle22");
        $this->assertEquals("champsCritereArticle22", $obj->getChampsCritereArticle22());
    }
}
