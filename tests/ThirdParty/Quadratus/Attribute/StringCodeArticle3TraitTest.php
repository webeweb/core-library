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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeArticle3Trait;

/**
 * Code article3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeArticle3TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeArticle3() method.
     *
     * @return void
     */
    public function testSetCodeArticle3() {

        $obj = new TestStringCodeArticle3Trait();

        $obj->setCodeArticle3("codeArticle3");
        $this->assertEquals("codeArticle3", $obj->getCodeArticle3());
    }
}
