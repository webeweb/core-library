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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereArticle9Trait;

/**
 * Lib critere article9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereArticle9TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereArticle9() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle9() {

        $obj = new TestStringLibCritereArticle9Trait();

        $obj->setLibCritereArticle9("libCritereArticle9");
        $this->assertEquals("libCritereArticle9", $obj->getLibCritereArticle9());
    }
}
