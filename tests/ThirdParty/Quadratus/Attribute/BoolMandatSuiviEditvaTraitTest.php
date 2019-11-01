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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolMandatSuiviEditvaTrait;

/**
 * Mandat suivi e d i t v a trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolMandatSuiviEditvaTraitTest extends AbstractTestCase {

    /**
     * Tests the setMandatSuiviEditva() method.
     *
     * @return void
     */
    public function testSetMandatSuiviEditva() {

        $obj = new TestBoolMandatSuiviEditvaTrait();

        $obj->setMandatSuiviEditva(true);
        $this->assertEquals(true, $obj->getMandatSuiviEditva());
    }
}
