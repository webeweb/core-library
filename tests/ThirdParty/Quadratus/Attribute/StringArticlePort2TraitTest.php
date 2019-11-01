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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringArticlePort2Trait;

/**
 * Article port2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringArticlePort2TraitTest extends AbstractTestCase {

    /**
     * Tests the setArticlePort2() method.
     *
     * @return void
     */
    public function testSetArticlePort2() {

        $obj = new TestStringArticlePort2Trait();

        $obj->setArticlePort2("articlePort2");
        $this->assertEquals("articlePort2", $obj->getArticlePort2());
    }
}
