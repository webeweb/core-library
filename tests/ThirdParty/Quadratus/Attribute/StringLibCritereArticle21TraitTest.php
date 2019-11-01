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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereArticle21Trait;

/**
 * Lib critere article2_1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereArticle21TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereArticle21() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle21() {

        $obj = new TestStringLibCritereArticle21Trait();

        $obj->setLibCritereArticle21("libCritereArticle21");
        $this->assertEquals("libCritereArticle21", $obj->getLibCritereArticle21());
    }
}
