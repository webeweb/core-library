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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereArticle8Trait;

/**
 * Lib critere article8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereArticle8TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereArticle8() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle8() {

        $obj = new TestStringLibCritereArticle8Trait();

        $obj->setLibCritereArticle8("libCritereArticle8");
        $this->assertEquals("libCritereArticle8", $obj->getLibCritereArticle8());
    }
}
