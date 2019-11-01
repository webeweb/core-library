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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolLicencie55ansTrait;

/**
 * Licencie55ans trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolLicencie55ansTraitTest extends AbstractTestCase {

    /**
     * Tests the setLicencie55ans() method.
     *
     * @return void
     */
    public function testSetLicencie55ans() {

        $obj = new TestBoolLicencie55ansTrait();

        $obj->setLicencie55ans(true);
        $this->assertEquals(true, $obj->getLicencie55ans());
    }
}
