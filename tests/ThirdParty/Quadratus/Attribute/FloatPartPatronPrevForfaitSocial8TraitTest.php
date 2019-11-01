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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatPartPatronPrevForfaitSocial8Trait;

/**
 * Part patron prev forfait social8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatPartPatronPrevForfaitSocial8TraitTest extends AbstractTestCase {

    /**
     * Tests the setPartPatronPrevForfaitSocial8() method.
     *
     * @return void
     */
    public function testSetPartPatronPrevForfaitSocial8() {

        $obj = new TestFloatPartPatronPrevForfaitSocial8Trait();

        $obj->setPartPatronPrevForfaitSocial8(10.092018);
        $this->assertEquals(10.092018, $obj->getPartPatronPrevForfaitSocial8());
    }
}
