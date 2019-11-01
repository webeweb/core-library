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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringArticlePort1Trait;

/**
 * Article port1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringArticlePort1TraitTest extends AbstractTestCase {

    /**
     * Tests the setArticlePort1() method.
     *
     * @return void
     */
    public function testSetArticlePort1() {

        $obj = new TestStringArticlePort1Trait();

        $obj->setArticlePort1("articlePort1");
        $this->assertEquals("articlePort1", $obj->getArticlePort1());
    }
}
