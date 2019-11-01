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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeArticle8Trait;

/**
 * Code article8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeArticle8TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeArticle8() method.
     *
     * @return void
     */
    public function testSetCodeArticle8() {

        $obj = new TestStringCodeArticle8Trait();

        $obj->setCodeArticle8("codeArticle8");
        $this->assertEquals("codeArticle8", $obj->getCodeArticle8());
    }
}
