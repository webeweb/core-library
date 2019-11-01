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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereArticle22Trait;

/**
 * Lib critere article2_2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereArticle22TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereArticle22() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle22() {

        $obj = new TestStringLibCritereArticle22Trait();

        $obj->setLibCritereArticle22("libCritereArticle22");
        $this->assertEquals("libCritereArticle22", $obj->getLibCritereArticle22());
    }
}
