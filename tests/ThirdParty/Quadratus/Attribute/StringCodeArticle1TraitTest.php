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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeArticle1Trait;

/**
 * Code article1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeArticle1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeArticle1() method.
     *
     * @return void
     */
    public function testSetCodeArticle1() {

        $obj = new TestStringCodeArticle1Trait();

        $obj->setCodeArticle1("codeArticle1");
        $this->assertEquals("codeArticle1", $obj->getCodeArticle1());
    }
}
