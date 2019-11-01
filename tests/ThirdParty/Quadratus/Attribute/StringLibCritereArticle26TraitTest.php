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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereArticle26Trait;

/**
 * Lib critere article2_6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereArticle26TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereArticle26() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle26() {

        $obj = new TestStringLibCritereArticle26Trait();

        $obj->setLibCritereArticle26("libCritereArticle26");
        $this->assertEquals("libCritereArticle26", $obj->getLibCritereArticle26());
    }
}
