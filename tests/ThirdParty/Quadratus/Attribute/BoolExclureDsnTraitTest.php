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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolExclureDsnTrait;

/**
 * Exclure d s n trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolExclureDsnTraitTest extends AbstractTestCase {

    /**
     * Tests the setExclureDsn() method.
     *
     * @return void
     */
    public function testSetExclureDsn() {

        $obj = new TestBoolExclureDsnTrait();

        $obj->setExclureDsn(true);
        $this->assertEquals(true, $obj->getExclureDsn());
    }
}
