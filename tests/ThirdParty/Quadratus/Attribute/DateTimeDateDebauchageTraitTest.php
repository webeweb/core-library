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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestDateTimeDateDebauchageTrait;

/**
 * Date debauchage trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class DateTimeDateDebauchageTraitTest extends AbstractTestCase {

    /**
     * Tests the setDateDebauchage() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebauchage() {

        // Set a Date/time mock.
        $dateDebauchage = new DateTime("2018-09-10");

        $obj = new TestDateTimeDateDebauchageTrait();

        $obj->setDateDebauchage($dateDebauchage);
        $this->assertSame($dateDebauchage, $obj->getDateDebauchage());
    }
}
