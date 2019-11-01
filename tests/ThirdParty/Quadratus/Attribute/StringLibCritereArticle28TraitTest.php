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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereArticle28Trait;

/**
 * Lib critere article2_8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereArticle28TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereArticle28() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle28() {

        $obj = new TestStringLibCritereArticle28Trait();

        $obj->setLibCritereArticle28("libCritereArticle28");
        $this->assertEquals("libCritereArticle28", $obj->getLibCritereArticle28());
    }
}
