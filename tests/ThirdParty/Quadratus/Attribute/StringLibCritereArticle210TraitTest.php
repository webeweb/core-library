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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereArticle210Trait;

/**
 * Lib critere article2_10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereArticle210TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereArticle210() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle210() {

        $obj = new TestStringLibCritereArticle210Trait();

        $obj->setLibCritereArticle210("libCritereArticle210");
        $this->assertEquals("libCritereArticle210", $obj->getLibCritereArticle210());
    }
}
