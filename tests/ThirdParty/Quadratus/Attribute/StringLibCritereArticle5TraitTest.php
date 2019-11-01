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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereArticle5Trait;

/**
 * Lib critere article5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereArticle5TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereArticle5() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle5() {

        $obj = new TestStringLibCritereArticle5Trait();

        $obj->setLibCritereArticle5("libCritereArticle5");
        $this->assertEquals("libCritereArticle5", $obj->getLibCritereArticle5());
    }
}
