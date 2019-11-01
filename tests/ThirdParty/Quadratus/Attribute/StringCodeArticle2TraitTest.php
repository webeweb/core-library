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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeArticle2Trait;

/**
 * Code article2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeArticle2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeArticle2() method.
     *
     * @return void
     */
    public function testSetCodeArticle2() {

        $obj = new TestStringCodeArticle2Trait();

        $obj->setCodeArticle2("codeArticle2");
        $this->assertEquals("codeArticle2", $obj->getCodeArticle2());
    }
}
