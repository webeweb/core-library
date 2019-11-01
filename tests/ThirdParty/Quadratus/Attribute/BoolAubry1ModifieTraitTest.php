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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolAubry1ModifieTrait;

/**
 * Aubry1 modifie trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolAubry1ModifieTraitTest extends AbstractTestCase {

    /**
     * Tests the setAubry1Modifie() method.
     *
     * @return void
     */
    public function testSetAubry1Modifie() {

        $obj = new TestBoolAubry1ModifieTrait();

        $obj->setAubry1Modifie(true);
        $this->assertEquals(true, $obj->getAubry1Modifie());
    }
}
