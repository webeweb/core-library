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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolLicenciePlanSocialTrait;

/**
 * Licencie plan social trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolLicenciePlanSocialTraitTest extends AbstractTestCase {

    /**
     * Tests the setLicenciePlanSocial() method.
     *
     * @return void
     */
    public function testSetLicenciePlanSocial() {

        $obj = new TestBoolLicenciePlanSocialTrait();

        $obj->setLicenciePlanSocial(true);
        $this->assertEquals(true, $obj->getLicenciePlanSocial());
    }
}
