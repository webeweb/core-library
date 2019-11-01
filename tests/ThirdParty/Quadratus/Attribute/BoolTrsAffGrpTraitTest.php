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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTrsAffGrpTrait;

/**
 * T r s aff grp trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTrsAffGrpTraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsAffGrp() method.
     *
     * @return void
     */
    public function testSetTrsAffGrp() {

        $obj = new TestBoolTrsAffGrpTrait();

        $obj->setTrsAffGrp(true);
        $this->assertEquals(true, $obj->getTrsAffGrp());
    }
}
