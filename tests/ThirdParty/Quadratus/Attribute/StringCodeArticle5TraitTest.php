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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeArticle5Trait;

/**
 * Code article5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeArticle5TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeArticle5() method.
     *
     * @return void
     */
    public function testSetCodeArticle5() {

        $obj = new TestStringCodeArticle5Trait();

        $obj->setCodeArticle5("codeArticle5");
        $this->assertEquals("codeArticle5", $obj->getCodeArticle5());
    }
}
