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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateRemboursementTrait;

/**
 * Date remboursement trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateRemboursementTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateRemboursement() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRemboursement() {

        // Set a Date/time mock.
        $dateRemboursement = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateRemboursementTrait();

        $obj->setDateRemboursement($dateRemboursement);
        $this->assertSame($dateRemboursement, $obj->getDateRemboursement());
    }
}
