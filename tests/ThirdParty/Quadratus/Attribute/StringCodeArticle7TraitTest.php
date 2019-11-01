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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeArticle7Trait;

/**
 * Code article7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeArticle7TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeArticle7() method.
     *
     * @return void
     */
    public function testSetCodeArticle7() {

        $obj = new TestStringCodeArticle7Trait();

        $obj->setCodeArticle7("codeArticle7");
        $this->assertEquals("codeArticle7", $obj->getCodeArticle7());
    }
}
