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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDeclTvaCdiTrait;

/**
 * Decl tva cdi trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDeclTvaCdiTraitTest extends AbstractTestCase {

    /**
     * Tests the setDeclTvaCdi() method.
     *
     * @return void
     */
    public function testSetDeclTvaCdi() {

        $obj = new TestStringDeclTvaCdiTrait();

        $obj->setDeclTvaCdi("declTvaCdi");
        $this->assertEquals("declTvaCdi", $obj->getDeclTvaCdi());
    }
}
