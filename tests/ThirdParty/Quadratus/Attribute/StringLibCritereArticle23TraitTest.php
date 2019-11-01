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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereArticle23Trait;

/**
 * Lib critere article2_3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereArticle23TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereArticle23() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle23() {

        $obj = new TestStringLibCritereArticle23Trait();

        $obj->setLibCritereArticle23("libCritereArticle23");
        $this->assertEquals("libCritereArticle23", $obj->getLibCritereArticle23());
    }
}
