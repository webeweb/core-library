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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringArticleTaxe4Trait;

/**
 * Article taxe4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringArticleTaxe4TraitTest extends AbstractTestCase {

    /**
     * Tests the setArticleTaxe4() method.
     *
     * @return void
     */
    public function testSetArticleTaxe4() {

        $obj = new TestStringArticleTaxe4Trait();

        $obj->setArticleTaxe4("articleTaxe4");
        $this->assertEquals("articleTaxe4", $obj->getArticleTaxe4());
    }
}
