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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeArticle9Trait;

/**
 * Code article9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeArticle9TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeArticle9() method.
     *
     * @return void
     */
    public function testSetCodeArticle9() {

        $obj = new TestStringCodeArticle9Trait();

        $obj->setCodeArticle9("codeArticle9");
        $this->assertEquals("codeArticle9", $obj->getCodeArticle9());
    }
}
