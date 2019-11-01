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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringArticleRegroupementTrait;

/**
 * Article regroupement trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringArticleRegroupementTraitTest extends AbstractTestCase {

    /**
     * Tests the setArticleRegroupement() method.
     *
     * @return void
     */
    public function testSetArticleRegroupement() {

        $obj = new TestStringArticleRegroupementTrait();

        $obj->setArticleRegroupement("articleRegroupement");
        $this->assertEquals("articleRegroupement", $obj->getArticleRegroupement());
    }
}
