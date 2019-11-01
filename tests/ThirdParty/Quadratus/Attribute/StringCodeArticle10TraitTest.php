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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeArticle10Trait;

/**
 * Code article10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeArticle10TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeArticle10() method.
     *
     * @return void
     */
    public function testSetCodeArticle10() {

        $obj = new TestStringCodeArticle10Trait();

        $obj->setCodeArticle10("codeArticle10");
        $this->assertEquals("codeArticle10", $obj->getCodeArticle10());
    }
}
