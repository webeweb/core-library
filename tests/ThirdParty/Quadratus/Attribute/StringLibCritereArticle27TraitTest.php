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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereArticle27Trait;

/**
 * Lib critere article2_7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereArticle27TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereArticle27() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle27() {

        $obj = new TestStringLibCritereArticle27Trait();

        $obj->setLibCritereArticle27("libCritereArticle27");
        $this->assertEquals("libCritereArticle27", $obj->getLibCritereArticle27());
    }
}
