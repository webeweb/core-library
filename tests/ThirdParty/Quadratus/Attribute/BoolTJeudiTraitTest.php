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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTJeudiTrait;

/**
 * T jeudi trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTJeudiTraitTest extends AbstractTestCase {

    /**
     * Tests the setTJeudi() method.
     *
     * @return void
     */
    public function testSetTJeudi() {

        $obj = new TestBoolTJeudiTrait();

        $obj->setTJeudi(true);
        $this->assertEquals(true, $obj->getTJeudi());
    }
}
