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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereArticle29Trait;

/**
 * Lib critere article2_9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereArticle29TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereArticle29() method.
     *
     * @return void
     */
    public function testSetLibCritereArticle29() {

        $obj = new TestStringLibCritereArticle29Trait();

        $obj->setLibCritereArticle29("libCritereArticle29");
        $this->assertEquals("libCritereArticle29", $obj->getLibCritereArticle29());
    }
}
