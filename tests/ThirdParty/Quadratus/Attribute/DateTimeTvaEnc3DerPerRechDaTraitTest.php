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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeTvaEnc3DerPerRechDaTrait;

/**
 * Tva enc3 der per rech d a trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeTvaEnc3DerPerRechDaTraitTest extends AbstractTestCase {

    /**
     * Tests the setTvaEnc3DerPerRechDa() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTvaEnc3DerPerRechDa() {

        // Set a Date/time mock.
        $tvaEnc3DerPerRechDa = new DateTime("2018-09-10");

        $obj = new TestDateTimeTvaEnc3DerPerRechDaTrait();

        $obj->setTvaEnc3DerPerRechDa($tvaEnc3DerPerRechDa);
        $this->assertSame($tvaEnc3DerPerRechDa, $obj->getTvaEnc3DerPerRechDa());
    }
}
