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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringArticleTaxe2Trait;

/**
 * Article taxe2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringArticleTaxe2TraitTest extends AbstractTestCase {

    /**
     * Tests the setArticleTaxe2() method.
     *
     * @return void
     */
    public function testSetArticleTaxe2() {

        $obj = new TestStringArticleTaxe2Trait();

        $obj->setArticleTaxe2("articleTaxe2");
        $this->assertEquals("articleTaxe2", $obj->getArticleTaxe2());
    }
}
