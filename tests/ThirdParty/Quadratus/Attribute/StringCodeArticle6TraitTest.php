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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeArticle6Trait;

/**
 * Code article6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeArticle6TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeArticle6() method.
     *
     * @return void
     */
    public function testSetCodeArticle6() {

        $obj = new TestStringCodeArticle6Trait();

        $obj->setCodeArticle6("codeArticle6");
        $this->assertEquals("codeArticle6", $obj->getCodeArticle6());
    }
}
