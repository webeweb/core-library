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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereArticle25Trait;

/**
 * Lib critere article2_5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereArticle25TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereArticle25() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle25() {

        $obj = new TestStringLibCritereArticle25Trait();

        $obj->setLibCritereArticle25("libCritereArticle25");
        $this->assertEquals("libCritereArticle25", $obj->getLibCritereArticle25());
    }
}
