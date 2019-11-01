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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringSaisPlanEmpSemTrait;

/**
 * Sais plan emp sem trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringSaisPlanEmpSemTraitTest extends AbstractTestCase {

    /**
     * Tests the setSaisPlanEmpSem() method.
     *
     * @return void
     */
    public function testSetSaisPlanEmpSem() {

        $obj = new TestStringSaisPlanEmpSemTrait();

        $obj->setSaisPlanEmpSem("saisPlanEmpSem");
        $this->assertEquals("saisPlanEmpSem", $obj->getSaisPlanEmpSem());
    }
}
