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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereArticle4Trait;

/**
 * Lib critere article4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereArticle4TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereArticle4() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle4() {

        $obj = new TestStringLibCritereArticle4Trait();

        $obj->setLibCritereArticle4("libCritereArticle4");
        $this->assertEquals("libCritereArticle4", $obj->getLibCritereArticle4());
    }
}
