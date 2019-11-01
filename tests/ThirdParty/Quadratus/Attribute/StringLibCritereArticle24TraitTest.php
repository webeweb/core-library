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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereArticle24Trait;

/**
 * Lib critere article2_4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereArticle24TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereArticle24() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle24() {

        $obj = new TestStringLibCritereArticle24Trait();

        $obj->setLibCritereArticle24("libCritereArticle24");
        $this->assertEquals("libCritereArticle24", $obj->getLibCritereArticle24());
    }
}
