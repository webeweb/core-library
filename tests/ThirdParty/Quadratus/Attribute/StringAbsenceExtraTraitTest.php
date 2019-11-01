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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAbsenceExtraTrait;

/**
 * Absence extra trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAbsenceExtraTraitTest extends AbstractTestCase {

    /**
     * Tests the setAbsenceExtra() method.
     *
     * @return void
     */
    public function testSetAbsenceExtra() {

        $obj = new TestStringAbsenceExtraTrait();

        $obj->setAbsenceExtra("absenceExtra");
        $this->assertEquals("absenceExtra", $obj->getAbsenceExtra());
    }
}
